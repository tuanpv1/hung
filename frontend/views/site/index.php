<?php

use common\models\News;
use frontend\widgets\SlideWidget;
use yii\helpers\Url;

/** @var \common\models\Info $info */
?>
<?= SlideWidget::widget() ?>
<!-- ABOUT US -->
<?php if ($about) {
    /** @var News $about */ ?>
    <div class="container-fluid about box_fix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="images_about">
                        <div class="images_about_innder">
                            <a href="<?= Url::to(['site/about']) ?>">
                                <img src="<?= $about->getImageLink() ?>"
                                     alt="<?= $about->title ?>"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 intro_about">
                    <p class="title_about"><a href="<?= Url::to(['site/about']) ?>"><?= $about->title ?></a></p>
                    <div class="intro_about_inner">
                        <p>
                            <?= $about->description ?>
                        </p>
                    </div>
                    <div class="button_about">
                        <a href="<?= Url::to(['site/about']) ?>">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ABOUT US -->
<!--PRODUCT-->
<div class="container-fluid product_index box_fix" id="list-products">
    <div class="container">
        <div class="row">
            <h2 class="title_gp"><a>DANH MỤC SẢN PHẨM</a></h2>
            <ul class="ul-product-index">
                <?php if ($listProducts) {
                    /** @var News $product */
                    foreach ($listProducts as $product) {
                        ?>
                        <li class="item-product-index">
                            <h2>
                                <a href="<?= Url::to(['site/detail-product', 'id' => $product->id]) ?>"><?= $product->title ?></a>
                            </h2>
                            <div class="img-item">
                                <a href="<?= Url::to(['site/detail-product', 'id' => $product->id]) ?>">
                                    <img src="<?= $product->getImageLink() ?>" class="img-responsive"/>
                                </a>
                            </div>
                            <div class="des"><?= $product->description ?></div>
                            <a href="<?= Url::to(['site/detail-product', 'id' => $product->id]) ?>" class="view-detial">Xem
                                chi tiết</a>
                        </li>
                        <?php
                    }
                } ?>
            </ul>
        </div>
    </div>
</div>
<!--PRODUCT-->
<?php
/** @var News $product_hot */
if ($product_hot) {
    ?>
    <!-- Ung Dung -->
    <div class="container-fluid ungdung-index box_fix">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 ungdung-index-left">
                    <h2>
                        <span style="color:#0789c7;"><span><?= $product_hot->title ?></h2>
                    <p> <?= $product_hot->description ?></p>
                    <a href="<?= Url::to(['site/detail-new', 'id' => $product_hot->id]) ?>" class="view-detail">Xem Chi
                        Tiết</a>
                </div>
                <div class="col-sm-6 col-xs-12 ungdung-index-right">
                    <img src="<?= $product_hot->getImageLink() ?>"
                         class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <?php
}
// Doạn dưới đẩy ra phần trải nghiệm
//echo  \frontend\widgets\ExperienceWidget::widget();
?>
<!--PROJECT DONE -->
<?= \frontend\widgets\FindPartner::widget() ?>
<div class="container-fluid bottom_content">
    <div class="row">
        <div class="container">

            <div class="row">
                <div class="col-md-4 sup_index cell_why_index">
                    <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/icon_sup-min.png"/>
                    <p class="tit_sup">Hỗ trợ</p>
                    <p class="tit_hotline">
                        <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/phone_sp.png"/>
                        Hotline: <?= !empty($info) ? $info->phone : '#' ?>
                    </p>
                    <p class="tit_hotline">
                        <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/phone_sp.png"/>
                        Kinh doanh: <?= !empty($info) ? $info->phone_support : '#' ?>
                    </p>
                    <p class="tit_hotline">
                        <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/mail_sp.png"/>
                        Email: <?= !empty($info) ? $info->email : '#' ?>
                    </p>
                    <p class="row_sup_online">
                        <span>Hỗ trợ 01</span>
                        <a href="skype:<?= !empty($info) ? $info->skype1 : '#' ?>?chat">
                            <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/skype.png"/>
                        </a>
                    </p>
                    <p class="row_sup_online">
                        <span>Hỗ trợ 02</span>
                        <a href="skype:<?= !empty($info) ? $info->skype2 : '#' ?>?chat">
                            <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/skype.png"/>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 sup_index  cell_why_index">
                    <div class="cell_why_inner">
                        <img src="<?= $info->getImageLink() ?>"/>
                        <p class="tit_sup"><?= Yii::$app->name ?></p>
                        <ul class="lisst_bot">
                            <li><a href="<?= Url::to(['site/about']) ?>">Giới thiệu về công ty DICOM</a></li>
                            <li><a href="<?= Url::home() ?>#list-products">Sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 sup_index  cell_why_index">
                    <div class="cell_why_inner">
                        <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/icon/DICOM_05.png"/>
                        <p class="tit_sup">Cơ hội khởi nghiệp</p>
                        <ul class="lisst_bot">
                            <li><a href="">Cơ hội phát triển đầy triển vọng với <?= Yii::$app->name ?></a></li>
                            <li><a href="">Chính sách nhân sự hướng tới sự phát triển con người</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear_edit"></div>
            </div>
        </div>
    </div>
</div>