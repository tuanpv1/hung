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
<!-- Ung Dung -->
<div class="container-fluid ungdung-index box_fix">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12 ungdung-index-left">
                <h2>
                    <span style="color:#0789c7;"><span>Ứng dụng</span></span> D-Home</h2>
                <p>
                    Chỉ với một Ứng dụng D-Home, bạn c&oacute; thể điều khiển v&agrave; gi&aacute;m s&aacute;t hầu hết c&aacute;c
                    thiết bị trong gia đ&igrave;nh từ đ&egrave;n, r&egrave;m, b&igrave;nh n&oacute;ng lạnh, ti vi, điều
                    h&ograve;a... mọi l&uacute;c, mọi nơi.&nbsp;</p>
                <ul>
                    <li>
                        Điều khiển thiết bị từ xa
                    </li>
                    <li>
                        Theo d&otilde;i trực tiếp ng&ocirc;i nh&agrave; th&ocirc;ng qua h&igrave;nh ảnh v&agrave; video
                    </li>
                    <li>
                        C&agrave;i đặt lịch bật/ tắt thiết bị&nbsp;
                    </li>
                </ul>
                <a href="http://dicom.vn/ung-dung-d-home-ct28.html" class="view-detail">Xem Chi Tiết</a>
            </div>
            <div class="col-sm-6 col-xs-12 ungdung-index-right">
                <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/sanpham/D-Home%20app/UNG-DUNG-NHA-THONG-MINH-DICOM-min.jpg"
                     class="img-responsive">
            </div>
        </div>
    </div>
</div>

<!-- Ung Dung -->

<!-- nav-index-bottom -->
<div class="container-fluid nav-index-bottom box_fix">
    <ul>
        <li>
            <a href="http://dicom.vn/he-thong-chieu-sang-nha-thong-minh-dicom-ct45.html" target="_blank">Chiếu S&aacute;ng</a>
        </li>
        <li>
            <a href="http://dicom.vn/dieu-khien-rem-tu-dong-voi-nha-thong-minh-dicom-ct41.html" target="_blank">R&egrave;m</a>
        </li>
        <li>
            <a href="http://dicom.vn/he-thong-an-ninh-canh-bao-cua-dicom-smarthome-ct42.html" target="_blank">An
                Ninh</a></li>
        <li>
            <a href="http://dicom.vn/am-thanh-da-vung-chat-luong-tai-dicom-smarthome-ct44.html" target="_blank">&Acirc;m
                Thanh</a></li>
    </ul>
</div>
<!-- nav-index-bottom -->

<div class="clear"></div>
<!-- Trai nghiem -->
<div class="container-fluid trainghiem box_fix"
     style="background: url(http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/banner/banner-nha-thong-minh-dicom%20copy-min.png) top left no-repeat;">
    <div class="row">
        <div class="container">
            <div class="row">
                <h3 class="title-trainghiem title_gp">TRẢI NGHIỆM</h3>
                <div class="slide-trainghiem owl-carousel">
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal15">
                                <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/video/trai-nghiem-nha-thong-minh-dicom-2.png"
                                     alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal18">
                                <img src="http://dicom.vn4u.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/video/lap-dat-nha-thong-minh-dicom.png"
                                     alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal23">
                                <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/video/penthouse-city-garden-noi-that.jpg"
                                     alt=""
                                     class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal11">
                                <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/video/video-he-thong-am-thanh-bluetooth.png"
                                     alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal12">
                                <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/video/giai-phap-am-thanh-khach-san.png"
                                     alt=""
                                     class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $(".slide-trainghiem").owlCarousel({
                            items: 3,
                            navigation: false
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<!-- Modalvideo -->
<div id="myModal15" class="modal fade modal-video" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal"></button>
        <div class="modal-content">
            <iframe allowfullscreen frameborder="0" width="660" height="415"
                    src="http://www.youtube.com/embed/6iU2esVq1As"></iframe>
        </div>
    </div>
</div>
<div id="myModal18" class="modal fade modal-video" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal"></button>
        <div class="modal-content">
            <iframe allowfullscreen frameborder="0" width="660" height="415"
                    src="http://www.youtube.com/embed/2K7TqjFliZQ"></iframe>
        </div>
    </div>
</div>
<div id="myModal23" class="modal fade modal-video" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal"></button>
        <div class="modal-content">
            <iframe allowfullscreen frameborder="0" width="660" height="415"
                    src="http://www.youtube.com/embed/RTPxx-b4dCs"></iframe>
        </div>
    </div>
</div>
<div id="myModal11" class="modal fade modal-video" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal"></button>
        <div class="modal-content">
            <iframe allowfullscreen frameborder="0" width="660" height="415"
                    src="http://www.youtube.com/embed/yIVmTem_ii8"></iframe>
        </div>
    </div>
</div>
<div id="myModal12" class="modal fade modal-video" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal"></button>
        <div class="modal-content">
            <iframe allowfullscreen frameborder="0" width="660" height="415"
                    src="http://www.youtube.com/embed/d3a_6Ow47s0"></iframe>
        </div>
    </div>
</div>
<!-- End Modalvideo -->

<div class="clear"></div>
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
                        <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/about/TRANG%20CHU/LIST/2.jpg"/>
                        <p class="tit_sup">DICOM IOT</p>
                        <ul class="lisst_bot">
                            <li><a href="http://dicom.vn/gioi-thieu.html">Giới thiệu về công ty DICOM</a></li>
                            <li><a href="http://dicom.vn/gioi-thieu#why">Tại sao bạn nên sử dụng sản phẩm của DICOM</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 sup_index  cell_why_index">
                    <div class="cell_why_inner">
                        <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/icon/DICOM_05.png"/>
                        <p class="tit_sup">Cơ hội khởi nghiệp</p>
                        <ul class="lisst_bot">
                            <li><a href="">Cơ hội phát triển đầy triển vọng với DICOM</a></li>
                            <li><a href="">Chính sách nhân sự hướng tới sự phát triển con người</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear_edit"></div>
                <!--                <div class="col-md-4 sup_index border_top_why cell_why_index">-->
                <!--                    <div class="cell_why_inner">-->
                <!--                        <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/icon/DICOM_13.png"/>-->
                <!--                        <p class="tit_sup">Hướng dẫn lắp đặt</p>-->
                <!--                        <ul class="lisst_bot">-->
                <!--                            <li><a href="http://dicom.vn/ho-tro-ki-thuat.html">Tài liệu hướng dẫn sử dụng và lắp đặt</a>-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 sup_index border_top_why cell_why_index">-->
                <!--                    <div class="cell_why_inner">-->
                <!--                        <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/icon/DICOM_15.png"/>-->
                <!--                        <p class="tit_sup">Trở thành đối tác của DICOM</p>-->
                <!--                        <ul class="lisst_bot">-->
                <!--                            <li><a href="http://dicom.vn/chinh-sach-doi-tac.html">Chính sách đối tác</a></li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 sup_index border_top_why cell_why_index">-->
                <!--                    <div class="cell_why_inner">-->
                <!--                        <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/icon/DICOM_17.png"/>-->
                <!--                        <p class="tit_sup">Cập nhật tin tức DICOM IOT</p>-->
                <!--                        <ul class="lisst_bot">-->
                <!--                            <li><a href="http://dicom.vn/tin-tuc.html">Tin tức</a></li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>