<?php
use common\models\News;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="header">
            <div class="button_header">
                <p class="title_slide_index">Liên hệ</p>                                                        </div>
            <img src="http://dicom.vn/upload/images/101H.jpg" width="100%" />
        </div>
    </div>
</div>
<div class="container-fluid contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p class="title_contact">Liên hệ với DICOM</p>
            </div>
            <div class="col-md-5 form_contact_edit">
                <p class="notice_contact">Vui lòng liên hệ qua email, điện thoại hoặc thư tín, chúng tôi sẽ nhanh chóng hồi đáp.</p>
                <p style="margin-top:10px;margin-bottom:20px" class="tit_hotline"><img src="images/phone_sp.png"/>Kỹ thuật:  0967 357 474 - Kinh doanh:0967 357 597</p>
                <form action="http://dicom.vn/lien-he.html" method="post">
                    <div class="row">
                        <div class="form-group col-xs-12 ">
                            <input id="name" class="form-control " value="" placeholder="Họ tên (*)" name="name" type="text" maxlength="50" />
                        </div>
                        <div class="form-group col-xs-12 ">
                            <input id="name" class="form-control " value="" placeholder="Địa chỉ (*)" name="address" type="text" maxlength="50" />
                        </div>
                        <div class="form-group col-xs-12 ">
                            <input id="phone" class="form-control " value="" placeholder="Điện thoại (*)" name="phone" type="text" />
                        </div>
                        <div class="form-group col-xs-12 ">
                            <input id="email" class="form-control " value="" placeholder="Email (*)" name="email" type="email" maxlength="50" />
                        </div>
                        <div class="form-group col-xs-12 ">
                            <textarea id="noi-dung" class="form-control " rows="5" placeholder="Nội dung (*)" name="content"></textarea>
                        </div>
                        <div class="form-group col-xs-12 ">
                            <input class=" btn_submit_edit" value="GỬI" type="submit" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-7">
                <h3>HÀ NỘI</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8187600525757!2d105.80558531543434!3d20.999900986013884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9787f94819%3A0x93304e958851eb40!2zQ8O0bmcgdHkgVE5ISCBDw7RuZyBuZ2jhu4cgRGljb20!5e0!3m2!1sen!2s!4v1501658610100" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>                <h3>TP.HCM</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1523661381398!2d106.67180000000002!3d10.799640000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752928c2be7997%3A0xa25a4d15c48d9313!2zMjA3QiBIb8OgbmcgVsSDbiBUaOG7pSwgcGjGsOG7nW5nIDgsIFBow7ogTmh14bqtbiwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1509085245128" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>                                                            </div>
        </div>
    </div>
</div>
<!--PROJECT DONE -->
<div class="container-fluid partner-contact">
    <div class="row">
        <div class="container">
            <p class="title_pjdone"><a>Các nhà phân phối của Dicom</a></p>
            <div class="row">
                <div id="partner-contact" class="owl-carousel list-project">
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="http://smass.vn/">
                                    <img src="http://dicom.vn/upload/images/slide/nha-phan-phoi-cua-Dicom-smarthome.png" height="100%" alt="Công ty Tầm nhìn Công nghệ 3S" />
                                </a>

                            </div>
                            <p><a class="title_done" href="http://smass.vn/">Công ty Tầm nhìn Công nghệ 3S</a></p>
                            <p><a class="title_done" href="http://smass.vn/">Đà Nẵng</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="https://qtsmarthome.com/">
                                    <img src="http://dicom.vn/upload/images/slide/Nha-phan-phoi-cua-Dicom.png" height="100%" alt="Công ty cổ phần Phát triển Công nghệ QT.Smart " />
                                </a>

                            </div>
                            <p><a class="title_done" href="https://qtsmarthome.com/">Công ty cổ phần Phát triển Công nghệ QT.Smart </a></p>
                            <p><a class="title_done" href="https://qtsmarthome.com/">Đà Nẵng</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="http://nhathongminhdicom.com/">
                                    <img src="http://dicom.vn/upload/images/slide/nha-phan-phoi-cua-Dicom-smarthome-2.png" height="100%" alt="Công ty cổ phần Công nghệ số Digihome" />
                                </a>

                            </div>
                            <p><a class="title_done" href="http://nhathongminhdicom.com/">Công ty cổ phần Công nghệ số Digihome</a></p>
                            <p><a class="title_done" href="http://nhathongminhdicom.com/">Hà Nội</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="http://www.unest.vn/">
                                    <img src="http://dicom.vn/upload/images/slide/nha-phan-phoi-cua-Dicom-smarthome-5.png" height="100%" alt="Nhà thông minh Unest" />
                                </a>

                            </div>
                            <p><a class="title_done" href="http://www.unest.vn/">Nhà thông minh Unest</a></p>
                            <p><a class="title_done" href="http://www.unest.vn/">P.901T2, toà Times Tower, Lê Văn Lương, Thanh Xuân, Hà Nội</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="http://dicomiot.vn/">
                                    <img src="http://dicom.vn/upload/images/slide/nha-phan-phoi-cua-Dicom-giang-son-thai-nguyen.png" height="100%" alt="Công ty Giang Sơn Thái Nguyên" />
                                </a>

                            </div>
                            <p><a class="title_done" href="http://dicomiot.vn/">Công ty Giang Sơn Thái Nguyên</a></p>
                            <p><a class="title_done" href="http://dicomiot.vn/">Số 508B, đường Thống Nhất, tổ 17, P. Tân Thịnh, TP. Thái Nguyên</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="http://emarco.com.vn/">
                                    <img src="http://dicom.vn/upload/images/slide/Npp-Dicom-Smarthome-emarco.jpg" height="100%" alt="Công ty cồ phần Emarco" />
                                </a>

                            </div>
                            <p><a class="title_done" href="http://emarco.com.vn/">Công ty cồ phần Emarco</a></p>
                            <p><a class="title_done" href="http://emarco.com.vn/">Số 11/73, Hoàng Ngân, Thanh Xuân, Hà Nội</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="http://diaocthongminh69.com.vn/lien-he.html">
                                    <img src="http://dicom.vn/upload/images/slide/Npp-Dicom-Thuong-tin-69.png" height="100%" alt="Công ty TNHH Đầu tư Xây dựng địa ốc Thương Tín 69" />
                                </a>

                            </div>
                            <p><a class="title_done" href="http://diaocthongminh69.com.vn/lien-he.html">Công ty TNHH Đầu tư Xây dựng địa ốc Thương Tín 69</a></p>
                            <p><a class="title_done" href="http://diaocthongminh69.com.vn/lien-he.html">01 Hồ Văn Mên,  P. An Thạnh, Tx Thuận An, Tỉnh Bình Dương </a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="http://dicom.vn/">
                                    <img src="http://dicom.vn/upload/images/slide/Nha-phan-phoi-cua-Dicom-5.png" height="100%" alt="Công Ty TNHH Thương Mại Vật Tư Khoa Học Kỹ Thuật Ngô Gia Phát" />
                                </a>

                            </div>
                            <p><a class="title_done" href="http://dicom.vn/">Công Ty TNHH Thương Mại Vật Tư Khoa Học Kỹ Thuật Ngô Gia Phát</a></p>
                            <p><a class="title_done" href="http://dicom.vn/">283/17 Cách Mạng Tháng Tám, P. 12, Q. 10,Tp. Hồ Chí Minh (TPHCM)</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cell_done_partner">
                            <div class="inner_cell_pr">
                                <a href="http://bigweb.com.vn">
                                    <img src="http://dicom.vn/upload/images/slide/Nha-phan-phoi-cua-Dicom-7.png" height="100%" alt="Công ty TNHH Thương mại dịch vụ Rehome" />
                                </a>

                            </div>
                            <p><a class="title_done" href="http://bigweb.com.vn">Công ty TNHH Thương mại dịch vụ Rehome</a></p>
                            <p><a class="title_done" href="http://bigweb.com.vn">78 Linh Đông, P. Linh Đông, Q. Thủ Đức, TP.HCM</a></p>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $("#partner-contact").owlCarousel({
                            items: 5,
                            pagination: false,
                            navigation: false,
                            navigationText:false,
                            autoPlay : 5000
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<!--PROJECT DONE -->