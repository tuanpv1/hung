<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 6/6/2018
 * Time: 10:55 AM
 */
?>

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
