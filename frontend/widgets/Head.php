<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/6/2017
 * Time: 9:44 PM
 */

namespace frontend\widgets;


use yii\base\Widget;

class Head extends Widget
{

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        return $this->render('head');
    }

}