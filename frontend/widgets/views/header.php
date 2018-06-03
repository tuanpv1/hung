<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/7/2017
 * Time: 7:21 AM
 */
use yii\helpers\Url;

/** @var $info \common\models\Info */
?>

<div class="menu_fix">
    <div class="container-fluid menu_top">
        <div class="container">
            <div class="logo-header">
                <a href="http://dicom.vn/"><img src="images/logo.png" class="img-responsive"></a>
            </div>
            <div class="row">
                <div id="dt-menu-toggle" class="dt-menu-toggle dt-menu-toggle1">
                    Menu <span class="dt-menu-toggle-icon"></span>
                </div>
                <ul class="menu menu1">
                    <li class="active_menu"><a href="http://dicom.vn/">Trang chủ</a></li>
                    <li class=""><a href="http://dicom.vn/gioi-thieu.html">Giới thiệu </a></li>
                    <li class=""><a href="http://dicom.vn/trai-nghiem.html">Trải nghiệm</a></li>
                    <li class=""><a href="http://dicom.vn/#san-pham-pr1">Sản phẩm</a></li>
                    <li class=""><a href="http://dicom.vn/tin-tuc.html">Tin tức</a></li>
                    <li class=""><a href="http://dicom.vn/ho-tro-ki-thuat.html">Hỗ trợ kĩ thuật</a></li>
                    <li class=""><a href="http://dicom.vn/giai-phap-tong-the.html">Giải pháp tổng thể</a></li>
                    <li class=""><a href="http://dicom.vn/tu-thiet-ke.html">Tự thiết kế</a></li>
                    <li class=""><a href="http://dicom.vn/lien-he.html">Liên hệ</a></li>
                </ul>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    var url = window.location.href;
                    var idName = url.split("#")[1];
                    $('#' + idName).css('padding-top', '80px');
                })
                $(function () {
                    var _domWindow = $(window);
                    var _holdFixPos = [];
                    var _currentIndex = -9999;

                    $(".banner_dt").each(function () {
                        _holdFixPos.push(totalOffset(this).y);
                    });

                    $("ul.menu li > a").bind("click", function (evt) {
                        var idName = $(this).attr("href").split("#")[1];
                        var dom = $("#" + idName);
                        if (dom[0] != undefined) {
                            evt.preventDefault();
                            $("html, body").stop().animate({scrollTop: totalOffset(dom[0]).y - 25}, 500);
                        }
                    });

                    _domWindow.bind("scroll", scrollEventHandler);
                    scrollEventHandler();

                    function scrollEventHandler(evt) {
                        var scrollTop = _domWindow.scrollTop();
                        var minTop = 9999;
                        var calcTop = 0;
                        var len = _holdFixPos.length;
                        var index = -1;
                        for (var i = 0; i < len; i++) {
                            calcTop = Math.abs(scrollTop - _holdFixPos[i]);
                            if (minTop < calcTop) {
                                break;
                            }
                            minTop = calcTop;
                            index = i;
                        }

                    }

                    function totalOffset(element) {
                        var totalOffsetX = 0;
                        var totalOffsetY = 0;
                        var currentElement = element;
                        do {
                            //totalOffsetX += currentElement.offsetLeft - currentElement.scrollLeft;
                            totalOffsetY += currentElement.offsetTop;
                            //if(currentElement == document.body){
                            //	totalOffsetY += currentElement.offsetTop - document.documentElement.scrollTop;
                            //	totalOffsetY += currentElement.offsetTop - document.body.scrollTop;
                            //}else{
                            //	totalOffsetY += currentElement.offsetTop - currentElement.scrollTop;
                            //}
                        } while (currentElement = currentElement.offsetParent)
                        return {x: totalOffsetX, y: totalOffsetY};
                    };
                });
            </script>
            <div class="row_language">
                <ul>
                    <li class="vi-lg"><a href="http://dicom.vn/vietnam">VN</a></li>
                    <li class="uk-lg"><a href="http://dicom.vn/english">EN</a></li>
                </ul>
                <a href="http://partner.dicom.vn/" target="_blank" class="doitac">Đối Tác</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="header">
            <div class="button_header">
                <h1 class="title_slide_index">Nhà thông minh <br/><span class="text-centeer">DICOM</span></h1>
                <!-- <p class="title_slide_index">Nhà thông minh <br /><span class="text-centeer">DICOM</span></p> -->
                <p class="tit_small_index">Kết nối thông minh - Muôn ngàn tiện ích</p>
                <a class="bt-header-link1" href='http://dicom.vn/gioi-thieu.html'>Giới thiệu</a>
                <a class="bt-header-link2" href='http://dicom.vn/#san-pham-pr1'>Sản phẩm</a>
                <!-- <a class="bt-header-link1" href="http://dicom.vn/trai-nghiem.html">Giới thiệu</a>
                <a class="bt-header-link2" href="http://dicom.vn/homegate-sp1.html">Sản phẩm</a> -->
            </div>
            <script type="text/javascript">
                $(window).load(function () {
                    $('#slide_edit').nivoSlider({
                        effect: 'random',
                        directionNav: false,
                        controlNav: true,
                        controlNavThumbs: false,
                        pauseOnHover: true,
                        manualAdvance: false,
                        prevText: '',
                        nextText: '',
                        randomStart: false
                    });
                });
            </script>
            <div id="slide_edit" class="nivoSlider">

                <a href="http://dicom.vn/">
                    <img src="http://dicom.vn/upload/images/banner/Dicom-Smarthome.png" alt="Nhà thông minh Dicom 5"
                         width="100%"/>
                </a>

                <a href="http://dicom.vn/">
                    <img src="http://dicom.vn4u.vn/upload/images/banner/trai-nghiem-nha-thong-minh-dicom(1).png"
                         alt="Hệ thống nhà thông minh Dicom " width="100%"/>
                </a>
            </div>
            <!-- SLIDESHOW END -->
        </div>
    </div>
</div>

