<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 22.11.2019
 * Time: 8:47
 */

namespace app\widgets;
use app\modules\admin\models\BackMenu;


class AdminMenu
{
    public static function getMenu(){
        $menuTags = '';
        $parents = BackMenu::find()->where(['parentnodeid' => 0, 'nodeaccess' => 1])->orderBy('nodeorder')->asArray()->all();
        if(!empty($parents)){
            $menuTags .= '<ul class="metismenu nav nav-inverse nav-bordered nav-inline nav-hoverable is-center" data-plugin="metismenu">';
            $counter = 0;
            foreach ($parents as $parent){
                $counter++;

                $menuTags .= '<li>';
                $menuTags .=
                    '<a href="javascript:void(0)">
                        <span class="nav-icon">
                            <i class="'.$parent['nodeicon'].'"></i>
                        </span>
                        <span class="nav-title">'.$parent['nodename'].'</span>
                        <span class="nav-tools">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>';
                $childs = BackMenu::find()->where(['parentnodeid' => $parent['nodeid'], 'nodeaccess' => 1])->orderBy('nodeorder')->asArray()->all();
                if(!empty($childs)){
                    $menuTags .= '<ul class="nav nav-sub nav-stacked collapse" aria-expanded="false">';
                    foreach ($childs as $child){
                        $menuTags .= '<li><a href="'.$child['nodeurl'].'">'.$child['nodename'].'</a></li>';
                    }
                    $menuTags .= '</ul>';
                }
                $menuTags .= '</li>';
            }
            $menuTags .= '</ul>';
        }
        return $menuTags;
    }
}