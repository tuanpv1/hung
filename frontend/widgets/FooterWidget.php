<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 6/27/2017
 * Time: 8:25 PM
 */

namespace frontend\widgets;
use common\models\Category;
use common\models\Info;
use yii\base\Widget;
use Yii;

class FooterWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        $category = Category::find()->andWhere(['status'=>Category::STATUS_ACTIVE])->limit(6)->all();
        $info = Info::findOne(Info::ID);
        return $this->render('footer',[
            'info'=> $info,
            'listCategory'=>$category,
        ]);
    }



    public static function actionFoot(){
        $f = new FooterWidget();
        return $f->render('foot');
    }
}