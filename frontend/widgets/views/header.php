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
                <a href="<?= Url::home() ?>"><img src="<?= $info->getImageLink() ?>" class="img-responsive"></a>
            </div>
            <div class="row">
                <div id="dt-menu-toggle" class="dt-menu-toggle dt-menu-toggle1">
                    Menu <span class="dt-menu-toggle-icon"></span>
                </div>
                <ul class="menu menu1">
                    <li class="active_menu"><a href="<?= Url::home() ?>">Trang chủ</a></li>
                    <li class=""><a href="<?= Url::to(['site/about']) ?>">Giới thiệu </a></li>
                    <li class=""><a href="<?= Url::to(['site/product']) ?>">Sản phẩm</a></li>
                    <li class=""><a href="<?= Url::to(['site/support-it']) ?>">Hỗ trợ kĩ thuật</a></li>
                    <li class=""><a href="<?= Url::to(['site/contact']) ?>">Liên hệ</a></li>
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
            <!--            <div class="row_language">-->
            <!--                <ul>-->
            <!--                    <li class="vi-lg"><a href="http://dicom.vn/vietnam">VN</a></li>-->
            <!--                    <li class="uk-lg"><a href="http://dicom.vn/english">EN</a></li>-->
            <!--                </ul>-->
            <!--                <a href="http://partner.dicom.vn/" target="_blank" class="doitac">Đối Tác</a>-->
            <!--            </div>-->
        </div>
    </div>
</div>