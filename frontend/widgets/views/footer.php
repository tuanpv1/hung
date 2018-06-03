<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/6/2017
 * Time: 9:49 PM
 */
use yii\helpers\Url;

/** @var $info \common\models\Info */
?>
<!--ARTICLE -->
<div class="container-fluid menu_bottom">
    <div class="container">
        <div class="row">
            <div id="dt-menu-toggle" class="dt-menu-toggle2 dt-menu-toggle">
                Menu <span class="dt-menu-toggle-icon"></span>
            </div>
            <ul class="menu menu2">
                <li class="active_menu"><a href="<?= Url::home() ?>">Trang chủ</a></li>
                <li class=""><a href="<?= Url::to(['site/about']) ?>">Giới thiệu </a></li>
                <li class=""><a href="<?= Url::to(['site/product']) ?>">Sản phẩm</a></li>
                <li class=""><a href="<?= Url::to(['site/support-it']) ?>">Hỗ trợ kĩ thuật</a></li>
                <li class=""><a href="<?= Url::to(['site/contact']) ?>">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p style="text-align: center;">
                    <span style="color:#000000;">
                        <span style="font-size: 24px;"><strong><?= $info->title ?></strong></span>
                    </span>
                </p>
                <p style="text-align: center;">
                    <img alt="" src="<?= Yii::$app->request->getBaseUrl() ?>/images/DICOM_23(1).png" style="width: 25px; height: 22px;"/> <?= $info->address ?></p>
                <p style="text-align: center;">
                    <img alt="" src="<?= Yii::$app->request->getBaseUrl() ?>/images/DICOM_30.png" style="width: 19px; height: 17px;"/>: <?= $info->phone ?>
                    &nbsp; &nbsp;&nbsp;
                    <img alt="" src="<?= Yii::$app->request->getBaseUrl() ?>/images/DICOM_27.png" style="width: 22px; height: 16px;"/>: <?= $info->email ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container bottom_footer2">
        <div class="row">
            <div class="col-xs-12">
                <div class="bottom_footer"></div>
            </div>
            <div class="col-md-6 left_ftoooter">
                <ul class="social_bottom">
                    <li><a href="<?= $info->facebook ?>" target="_blank"><img src="<?= Yii::$app->request->getBaseUrl() ?>/images/face1-min.png" alt="Facebook"/></a></li>
                    <li><a href="https://www.youtube.com/channel/UCxJYFaIEY99YvxK2m0CNDEw" target="_blank">
                            <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/you1-min.png" alt="Youtube"/></a></li>
                    <li>
                        <a href="https://plus.google.com/114805154313563931884/about?_ga=1.217388630.1330760275.1476754655"
                           target="_blank"><img src="<?= Yii::$app->request->getBaseUrl() ?>/images/gg1-min.png" alt="Google+"/></a></li>
                </ul>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>
