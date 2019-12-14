<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 22.11.2019
 * Time: 8:47
 */

namespace app\widgets;

use app\modules\admin\models\FrontMenu;

class SiteMenu
{
    public static function getMenu(){

        $tags = '';
        $parents = FrontMenu::find()->where(['parentnodeid' => 0, 'nodeaccess' => 1])
            ->orderBy('nodeorder')->asArray()->all();
        if(!empty($parents)){
            $tags .= '<ul id="menu-main-navigation-1" class="sf-menu">';
                foreach ($parents as $parent){
                    $childs = FrontMenu::find()->where(['parentnodeid' => $parent['nodeid'], 'nodeaccess' => 1])
                        ->orderBy('nodeorder')->asArray()->all();
                    $hasChildren = (!empty($childs)) ? 'menu-item-has-children' : '';
                    $tags .= '<li class = "menu-item '.$hasChildren.' akea-normal-menu">';
                        $tags .= '<a href = "'.$parent['nodeurl'].'" class = sf-with-ul-pre>'.$parent['nodename'].'</a>';
                        if(!empty($childs)){
                            $tags .= '<ul class = sub-menu>';
                                foreach ($childs as $child){
                                    $subchilds = FrontMenu::find()->where(['parentnodeid' => $child['nodeid'], 'nodeaccess' => 1])
                                        ->orderBy('nodeorder')->asArray()->all();
                                    $hasSubChildren = (!empty($subchilds)) ? ' menu-item-has-children ' : '';
                                    $dataSize = (!empty($subchilds)) ? ' data-size = "60" ' : '';
                                    $subChildClass = (!empty($subchilds)) ? ' sf-with-ul-pre sf-with-ul ' : '';
                                    $tags .= '<li class = "menu-item '.$hasSubChildren.' " '.$dataSize.'>
                                                <a href = "'.$child['nodeurl'].'" class="'.$subChildClass.'">'.$child['nodename'].'</a>';
                                        if(!empty($subchilds)){
                                            $tags .= '<ul class = sub-menu>';
                                                foreach ($subchilds as $subchild){
                                                    $tags .= '<li class = "menu-item">
                                                                  <a href = "'.$subchild['nodeurl'].'">
                                                                    '.$subchild['nodename'].'
                                                                   </a>
                                                               </li>';
                                                }
                                            $tags .= '</ul>';
                                        }
                                    $tags .= '</li>';
                                }
                            $tags .= '</ul>';
                        }
                    $tags .= '</li>';
                }
            $tags .= '</ul>';
        }
        return $tags;
    }

    public static function getMobileMenu(){
        $tags = '';
        $parents = FrontMenu::find()->where(['parentnodeid' => 0, 'nodeaccess' => 1])
            ->orderBy('nodeorder')->asArray()->all();
        if(!empty($parents)){
            $tags .= '<ul id="menu-main-navigation-2" class="menu">';

            foreach ($parents as $parent){
                $childs = FrontMenu::find()->where(['parentnodeid' => $parent['nodeid'], 'nodeaccess' => 1])
                    ->orderBy('nodeorder')->asArray()->all();
                $hasChildren = (!empty($childs)) ? 'menu-item-has-children' : '';

                $tags .= '<li class = "menu-item '.$hasChildren.' akea-normal-menu">';
                $tags .= '<a href = "'.$parent['nodeurl'].'" class = sf-with-ul-pre>'.$parent['nodename'].'</a>';
                if(!empty($childs)){
                    $tags .= '<ul class = sub-menu>';
                    foreach ($childs as $child){
                        $subchilds = FrontMenu::find()->where(['parentnodeid' => $child['nodeid'], 'nodeaccess' => 1])
                            ->orderBy('nodeorder')->asArray()->all();
                        $hasSubChildren = (!empty($subchilds)) ? ' menu-item-has-children ' : '';
                        $dataSize = (!empty($subchilds)) ? ' data-size = "60" ' : '';
                        $subChildClass = (!empty($subchilds)) ? ' sf-with-ul-pre sf-with-ul ' : '';
                        $tags .= '<li class = "menu-item '.$hasSubChildren.' " '.$dataSize.'>
                                                <a href = "'.$child['nodeurl'].'" class="'.$subChildClass.'">'.$child['nodename'].'</a>';
                        if(!empty($subchilds)){
                            $tags .= '<ul class = sub-menu>';
                            foreach ($subchilds as $subchild){
                                $tags .= '<li class = "menu-item">
                                             <a href = "'.$subchild['nodeurl'].'">
                                              '.$subchild['nodename'].'
                                             </a>
                                           </li>';
                            }
                            $tags .= '</ul>';
                        }
                        $tags .= '</li>';
                    }
                    $tags .= '</ul>';
                }
                $tags .= '</li>';
            }
            $tags .= '</ul>';
        }
        return $tags;
    }
}