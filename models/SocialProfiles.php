<?php

/**
 * License CreativeCommon
 * Created By Soliev Parviz and Muzafarov Manuchehr
 * @copyright Copyright (c) 2018-2019
 */


namespace app\models;

use Yii;
use yii\base\BootstrapInterface;

class SocialProfiles implements BootstrapInterface {

    private $db;

    public function __construct() {
        $this->db = Yii::$app->db;
    }


    public function bootstrap($app) {

        // Get data from database
        $sql = $this->db->createCommand("SELECT p.id, p.name, p.link, p.icon, p.type FROM profiles p WHERE p.status = 1");
        $sql_contact = $this->db->createCommand('SELECT c.country, c.city, c.address, c.phone_number FROM contact c WHERE c.status = 1');
        $sql_categories = $this->db->createCommand('SELECT ca.name, ca.id FROM category ca WHERE ca.status = 1');

        $socials = $sql->queryAll();
        $sql_contact = $sql_contact->queryAll();
        $sql_categories = $sql_categories->queryAll();

        foreach ($socials as $key => $val) {
            if($val['icon'] == 'envelope'){
                Yii::$app->params['email_address'] = $val['name'];
            }
            Yii::$app->params['profiles'][$val['id']]['name'] = $val['name'];
            Yii::$app->params['profiles'][$val['id']]['link'] = $val['link'];
            Yii::$app->params['profiles'][$val['id']]['icon'] = $val['icon'];
            Yii::$app->params['profiles'][$val['id']]['type'] = $val['type'];
        }

        foreach ($sql_contact as $key => $val2) {
            Yii::$app->params['contact']['country'] = $val2['country'];
            Yii::$app->params['contact']['city'] = $val2['city'];
            Yii::$app->params['contact']['address'] = $val2['address'];
            Yii::$app->params['contact']['phone_number'] = $val2['phone_number'];
        }

        foreach ($sql_categories as $key => $val3) {
            Yii::$app->params['category'][$val3['id']]['name'] = $val3['name'];
        }


    }
}