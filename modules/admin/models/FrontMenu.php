<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "front_menu".
 *
 * @property int $nodeid
 * @property int $parentnodeid
 * @property string $nodeshortname
 * @property string $nodename
 * @property string $nodeurl
 * @property string $userstatus
 * @property int $nodeaccess
 * @property int $nodestatus
 * @property int $nodeorder
 * @property string $nodefile
 * @property string $nodeicon
 * @property string $ishasdivider
 * @property string $hasnotify
 * @property string $notifyscript
 * @property string $isforguest
 * @property string $arrow_tag
 * @property string $position
 */
class FrontMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'front_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parentnodeid', 'nodeaccess', 'nodestatus', 'nodeorder'], 'integer'],
            [['nodename', 'nodeurl'], 'required'],
            [['ishasdivider', 'hasnotify', 'isforguest', 'position'], 'string'],
            [['nodeshortname', 'nodeicon'], 'string', 'max' => 50],
            [['nodename'], 'string', 'max' => 100],
            [['nodeurl', 'nodefile', 'notifyscript', 'arrow_tag'], 'string', 'max' => 255],
            [['userstatus'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nodeid' => 'Nodeid',
            'parentnodeid' => 'Parent',
            'nodeshortname' => 'Short Name',
            'nodename' => 'Name',
            'nodeurl' => 'Url',
            'userstatus' => 'User Access',
            'nodeaccess' => 'Access',
            'nodestatus' => 'Status',
            'nodeorder' => 'Order',
            'nodefile' => 'Nodefile',
            'nodeicon' => 'Icon',
            'ishasdivider' => 'Ishasdivider',
            'hasnotify' => 'Hasnotify',
            'notifyscript' => 'Notifyscript',
            'isforguest' => 'Isforguest',
            'arrow_tag' => 'Arrow Tag',
            'position' => 'Position',
        ];
    }

    public static function getItems(){
        $items = FrontMenu::find()->where(['nodeaccess' => 1])->asArray()->all();
        return $items;
    }
    public function setItemOrder($id){
        //after $id
        if(empty($id)){
            $id=-1;
        }
        if($id == -2){
            $this->nodeorder = 0;
            Yii::$app->db->createCommand('UPDATE front_menu SET nodeorder = nodeorder + 1')->execute();
        }elseif($id == -1){
            $lastItemOrder = $this::find()->max('nodeorder');
            $this->nodeorder = $lastItemOrder+1;
        }else{
            $id+=1;
            $this->nodeorder = $id;
            Yii::$app->db->createCommand('UPDATE front_menu SET nodeorder = nodeorder + 1 WHERE nodeorder >= '.$id)->execute();
        }

    }
}
