<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 6/4/2018
 * Time: 3:38 PM
 */

/** @var \common\models\Info $info */
?>
<div class="container-fluid">
    <div class="row">
        <div class="header">
            <div class="button_header">
                <p class="title_slide_index">Hỗ trợ kĩ thuật</p></div>
            <img src="http://dicom.vn/upload/<?= Yii::$app->request->getBaseUrl() ?>/images/banner/Dicom-1(3).png"
                 width="100%"/>
        </div>
    </div>
</div>
<!-- Trang hỗ trợ kỹ thuật cha -->

<div class="container-fluid support_row">
    <div class="container">
        <div class="row">
            <div class="col-md-3 cell_support">
                <a href="#"><img style="height: 36px;width: 36px"
                                 src="<?= !empty($info) ? $info->getImageLink() : '' ?>"/></a>
                <a class="active_sp" href="#">Tư vấn trực tuyến</a>
            </div>
            <!--            <div class="col-md-3 cell_support">-->
            <!--                <a href="http://dicom.vn/tai-lieu-ki-thuat-online.html"><img-->
            <!--                            src="http://dicom.vn/upload/images/icon.png"/></a>-->
            <!--                <a class="" href="http://dicom.vn/tai-lieu-ki-thuat-online.html">Tài liệu kĩ thuật online</a>-->
            <!--            </div>-->
            <!--            <div class="col-md-3 cell_support">-->
            <!--                <a href="http://dicom.vn/video-tai-lieu-ki-thuat.html"><img-->
            <!--                            src="http://dicom.vn4u.vn/upload/images/icon.png"/></a>-->
            <!--                <a class="" href="http://dicom.vn/video-tai-lieu-ki-thuat.html">Video tài liệu kĩ thuật</a>-->
            <!--            </div>-->
            <!--            <div class="col-md-3 cell_support">-->
            <!--                <a href="http://dicom.vn/tai-lieu-ki-thuat-pdf.html"><img-->
            <!--                            src="http://dicom.vn4u.vn/upload/images/icon.png"/></a>-->
            <!--                <a class="" href="http://dicom.vn/tai-lieu-ki-thuat-pdf.html">Tài liệu kĩ thuật PDF</a>-->
            <!--            </div>-->
        </div>
    </div>
</div>
<div class="container-fluid support_rows">
    <div class="container">
        <div class="row">
            <div class="col-md-6 form_contact_edit">
                <?= \frontend\widgets\SubscriberWigwet::widget() ?>
            </div>
            <div class="col-md-6">
                <p style="margin-bottom:50px;" class="notice_contact">Hãy để lại thông tin và yêu cầu của
                    bạn. <?= Yii::$app->name ?> sẽ liên hệ tư vấn và giải đáp trực tiếp các yêu cầu của bạn</p>
                <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/icon_sup.png"/>
                <p class="tit_sup">Hỗ trợ</p>
                <p class="tit_hotline">
                    <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/phone_sp.png"/>
                    Hotline: <?= !empty($info) ? $info->phone_support : '' ?></p>
                <p class="tit_hotline">
                    <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/mail_sp.png"/>
                    Email: <?= !empty($info) ? $info->email : '' ?>
                </p>
                <p class="row_sup_online">
                    <span>Hỗ trợ 01</span>
                    <a href="skype:<?= !empty($info) ? $info->skype1 : '' ?>?chat">
                        <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/skype.png"/>
                    </a>
                </p>
                <p class="row_sup_online">
                    <span>Hỗ trợ 02</span>
                    <a href="skype:<?= !empty($info) ? $info->skype2 : '' ?>?chat">
                        <img src="<?= Yii::$app->request->getBaseUrl() ?>/images/skype.png"/>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid support_rows">
    <div class="container">
        <div class="row">
            <div class="col-md-12 body_tailieu_fulltext">
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.tailieu_links').on('click', function () {
            $('.row_tailieu').removeClass('active_tl');
            $(this).parent().addClass('active_tl');
            var id = $(this).attr('data-id');
            var tit = $(this).text();
            $('.art_one_tit').html(tit);
            var url = "http://dicom.vn/ajax_tailieu";
            $.ajax({
                type: "POST",
                url: url,
                data: {id: id},
                success: succes2,
            });
            $('p.art_one_tit').scrollTop(300);
        });
    });
    function succes2(data, status) {
        $('.full_tl').html(data);
    }
</script><!--ARTICLE -->
