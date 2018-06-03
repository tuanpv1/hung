<?php

use common\models\News;
use frontend\widgets\SlideWidget;
use yii\helpers\Url;

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
                <img src="http://dicom.vn/upload/images/sanpham/D-Home%20app/UNG-DUNG-NHA-THONG-MINH-DICOM-min.jpg"
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
     style="background: url(http://dicom.vn/upload/images/banner/banner-nha-thong-minh-dicom%20copy-min.png) top left no-repeat;">
    <div class="row">
        <div class="container">
            <div class="row">
                <h3 class="title-trainghiem title_gp">TRẢI NGHIỆM</h3>
                <div class="slide-trainghiem owl-carousel">
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal15">
                                <img src="http://dicom.vn/upload/images/video/trai-nghiem-nha-thong-minh-dicom-2.png"
                                     alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal18">
                                <img src="http://dicom.vn4u.vn/upload/images/video/lap-dat-nha-thong-minh-dicom.png"
                                     alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal23">
                                <img src="http://dicom.vn/upload/images/video/penthouse-city-garden-noi-that.jpg" alt=""
                                     class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal11">
                                <img src="http://dicom.vn/upload/images/video/video-he-thong-am-thanh-bluetooth.png"
                                     alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <a href="javascript:;" data-toggle="modal" data-target="#myModal12">
                                <img src="http://dicom.vn/upload/images/video/giai-phap-am-thanh-khach-san.png" alt=""
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
<!-- Trai nghiem -->
<!--ARTICLE -->
<!-- <div class="container-fluid art_index">
	<div class="row">
		<p class="title_art_index_w"><a href="http://dicom.vn/tin-tuc.html">điểm tin cùng dicom</a></p>
		<img src="http://dicom.vn/upload/images/bg_art.png" width="100%" />
		<div class="container index_top_index">
			<div class="row">
									<div class="col-md-4 cell_art_index_wrap">
						<div class="cell_art_index">
							<div class="images_art_index">
								<a href="http://dicom.vn/ung-dung-d-home-ct28.html">
									<img src="http://dicom.vn/upload/images/sanpham/D-Home%20app/UNG-DUNG-NHA-THONG-MINH-DICOM.jpg" height="100%" alt="Ứng dụng D-Home"/>
								</a>
							</div>
							<p class="title_art_index"><a href="http://dicom.vn/ung-dung-d-home-ct28.html">Ứng dụng D-Home</a></p>
							<div class="intro_art_index">
								D-Home App là ứng dụng thông minh của Dicom Smart home giúp điều khiển mọi thiết bị trong gia đình một cách dễ dàng qua Smartphone, tablet, PC.							</div>
						</div>
					</div>
									<div class="col-md-4 cell_art_index_wrap">
						<div class="cell_art_index">
							<div class="images_art_index">
								<a href="http://dicom.vn/bo-dieu-khien-trung-tam-nha-thong-minh-ct64.html">
									<img src="http://dicom.vn/upload/files/bo-dieu-khien-trung-tam-011.png" height="100%" alt="Bộ điều khiển trung tâm nhà thông minh"/>
								</a>
							</div>
							<p class="title_art_index"><a href="http://dicom.vn/bo-dieu-khien-trung-tam-nha-thong-minh-ct64.html">Bộ điều khiển trung tâm nhà thông minh</a></p>
							<div class="intro_art_index">
								Một ngôi nhà với các thiết bị thông minh thì không thể thiếu bộ điều khiển trung tâm nhà thông minh. Bộ điều khiển này đóng vai trò như một bộ não kết nối và quản lý các thiết bị điện, công tắc điều khiển từ xa trong ngôi nhà của bạn trên điện thoại thông minh hay máy tính bảng.
							</div>
						</div>
					</div>
									<div class="col-md-4 cell_art_index_wrap">
						<div class="cell_art_index">
							<div class="images_art_index">
								<a href="http://dicom.vn/he-thong-dieu-khien-tu-xa-bang-tia-hong-ngoai-ct65.html">
									<img src="http://dicom.vn/upload/images/tintuc/bai%20viet%203/6-1.jpg" height="100%" alt="Hệ thống điều khiển từ xa bằng tia hồng ngoại giải pháp hoàn hảo cho nhà thông minh"/>
								</a>
							</div>
							<p class="title_art_index"><a href="http://dicom.vn/he-thong-dieu-khien-tu-xa-bang-tia-hong-ngoai-ct65.html">Hệ thống điều khiển từ xa bằng tia hồng ngoại giải pháp hoàn hảo cho nhà thông minh</a></p>
							<div class="intro_art_index">
								Điều khiển từ xa bằng hồng ngoại là một trong những thiết bị  cốt lõi của một ngôi nhà thông minh để điều khiển hầu hết các thiết bị có điều khiển hồng ngoại như: quạt, tivi, điều hòa,…. giúp bạn có thể tiết kiệm được thời gian mà vẫn có thể kiểm soát được tình hình sử dụng các thiết bị điện trong gia đình của mình.							</div>
						</div>
					</div>
							</div>
		</div>
	</div>
</div> -->
<!--PROJECT DONE -->
<!-- <div class="container-fluid project_done">
	<div class="row">
		<img src="http://dicom.vn/upload/images/1.jpg" width="100%" />
		<div class="container">
			<p class="title_pjdone"><a>dự án dicom đã thực hiện</a></p>
			<div class="row">
				<div id="pro_done" class="owl-carousel list-project">
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Nha-mau-tai-Vinhome-Central-Park-album1.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/5.jpg" height="100%" alt="Nhà mẫu tại Vinhome Central Park" /></a>
									<a class="title_done" href="http://dicom.vn/Nha-mau-tai-Vinhome-Central-Park-album1.html">Nhà mẫu tại Vinhome Central Park</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Can-ho-Cao-cap-tai-Royal-City-album2.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/Royal%20City/5.jpg" height="100%" alt="Căn hộ Cao cấp tại Royal City" /></a>
									<a class="title_done" href="http://dicom.vn/Can-ho-Cao-cap-tai-Royal-City-album2.html">Căn hộ Cao cấp tại Royal City</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Can-ho-tai-chung-cu-cao-cap-Huynh-Thuc-Khang-album3.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/Huynh%20Thuc%20Khang/5.JPG" height="100%" alt="Căn hộ tại chung cư cao cấp Huỳnh Thúc Kháng" /></a>
									<a class="title_done" href="http://dicom.vn/Can-ho-tai-chung-cu-cao-cap-Huynh-Thuc-Khang-album3.html">Căn hộ tại chung cư cao cấp Huỳnh Thúc Kháng</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Biet-thu-Vuon-Dao-Tay-Ho-album4.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/Biet%20thu%20Ho%20Tay/5.jpg" height="100%" alt="Biệt thự Vườn Đào-Tây Hồ" /></a>
									<a class="title_done" href="http://dicom.vn/Biet-thu-Vuon-Dao-Tay-Ho-album4.html">Biệt thự Vườn Đào-Tây Hồ</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Biet-thu-nghi-duong-President-tai-FLC-Resort--album7.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/FLC%20Thanh%20Hoa/biet-thu-nghi-duong-flc-thanh-hoa.png" height="100%" alt="Biệt thự nghỉ dưỡng President tại FLC Resort " /></a>
									<a class="title_done" href="http://dicom.vn/Biet-thu-nghi-duong-President-tai-FLC-Resort--album7.html">Biệt thự nghỉ dưỡng President tại FLC Resort </a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Can-ho-cao-cap-tai-Park-City-album8.html"><img src="http://dicom.vn/upload/images/banner/4.png" height="100%" alt="Căn hộ cao cấp tại Park City" /></a>
									<a class="title_done" href="http://dicom.vn/Can-ho-cao-cap-tai-Park-City-album8.html">Căn hộ cao cấp tại Park City</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Biet-thu-Xanh-tai-Dich-Vong-Cau-Giay-album9.html"><img src="http://dicom.vn/upload/images/banner/nha-thong-minh-dicom-nha-mau.jpg" height="100%" alt="Biệt thự Xanh tại Dịch Vọng - Cầu Giấy" /></a>
									<a class="title_done" href="http://dicom.vn/Biet-thu-Xanh-tai-Dich-Vong-Cau-Giay-album9.html">Biệt thự Xanh tại Dịch Vọng - Cầu Giấy</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Biet-thu-Garden-View-Hai-Phong-album10.html"><img src="http://dicom.vn/upload/images/banner/nha-thong-minh-dicom-hai-phong.JPG" height="100%" alt="Biệt thự Garden View Hải Phòng" /></a>
									<a class="title_done" href="http://dicom.vn/Biet-thu-Garden-View-Hai-Phong-album10.html">Biệt thự Garden View Hải Phòng</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Can-ho-cao-cap-tai-Thang-Long-Number-One-album11.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/Thang%20Long%20Numberone/can-ho-cao-cap-tai-thang-long-numberone.png" height="100%" alt="Căn hộ cao cấp tại Thăng Long Number One" /></a>
									<a class="title_done" href="http://dicom.vn/Can-ho-cao-cap-tai-Thang-Long-Number-One-album11.html">Căn hộ cao cấp tại Thăng Long Number One</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Can-ho-cao-cap-tai-Mandarin-Garden-album12.html"><img src="http://dicom.vn/upload/images/banner/nha-thong-minh-dicom-tai-mandarin-garden-2.jpg" height="100%" alt="Căn hộ cao cấp tại Mandarin Garden" /></a>
									<a class="title_done" href="http://dicom.vn/Can-ho-cao-cap-tai-Mandarin-Garden-album12.html">Căn hộ cao cấp tại Mandarin Garden</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Biet-thu-Vuon-Tung-tai-Ecopark-album13.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/Ecopark/nha-thong-minh-dicom-tai-ecopark.jpg" height="100%" alt="Biệt thự Vườn Tùng tại Ecopark" /></a>
									<a class="title_done" href="http://dicom.vn/Biet-thu-Vuon-Tung-tai-Ecopark-album13.html">Biệt thự Vườn Tùng tại Ecopark</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Biet-thu-Hoa-sua-Vinhomes-Riverside-album14.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/Vihomes%20Riverside/IMG_2078.JPG" height="100%" alt="Biệt thự Hoa sữa - Vinhomes Riverside" /></a>
									<a class="title_done" href="http://dicom.vn/Biet-thu-Hoa-sua-Vinhomes-Riverside-album14.html">Biệt thự Hoa sữa - Vinhomes Riverside</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Can-ho-cao-cap-Penthouse-City-Garden-album15.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/City%20Garden/city-garden-apartment-17.jpg" height="100%" alt="Căn hộ cao cấp Penthouse City Garden" /></a>
									<a class="title_done" href="http://dicom.vn/Can-ho-cao-cap-Penthouse-City-Garden-album15.html">Căn hộ cao cấp Penthouse City Garden</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Biet-thu-Sim-City-Quan-9-album16.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/Bi%E1%BB%87t%20th%E1%BB%B1%20Sim%20City/nha-mau-du-an-sim-city-quan-9-10-1024x683.jpg" height="100%" alt="Biệt thự Sim City - Quận 9" /></a>
									<a class="title_done" href="http://dicom.vn/Biet-thu-Sim-City-Quan-9-album16.html">Biệt thự Sim City - Quận 9</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Can-ho-chung-cu-U-Silk-City-album17.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/u-silk/silk.jpg" height="100%" alt="Căn hộ chung cư U-Silk City" /></a>
									<a class="title_done" href="http://dicom.vn/Can-ho-chung-cu-U-Silk-City-album17.html">Căn hộ chung cư U-Silk City</a>
								</div>
							</div>
						</div>
											<div class="item">
							<div class="cell_done">
								<div class="inner_cell_pr effect">
									<a href="http://dicom.vn/Can-ho-cao-cap-tai-Time-City-Park-Hill-album18.html"><img src="http://dicom.vn/upload/images/Cong%20trinh%20thuc%20hien/time%20city%20park%20hill/Phoi-canh-park-hill.jpg" height="100%" alt="Căn hộ cao cấp tại Time City Park Hill" /></a>
									<a class="title_done" href="http://dicom.vn/Can-ho-cao-cap-tai-Time-City-Park-Hill-album18.html">Căn hộ cao cấp tại Time City Park Hill</a>
								</div>
							</div>
						</div>
									</div>
				<script>
					$(document).ready(function () {
						$("#pro_done").owlCarousel({
							items: 3,
							pagination: false,
							navigation: true,
							navigationText:false
						});
					});
				</script>
			</div>
		</div>
	</div>
</div> -->
<!--PROJECT DONE -->
<div class="clear"></div>
<div class="container-fluid doitac-index">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="box-heading-doitac col-xs-12">
                    <h3 style="text-align: center;">
                        <span style="color:#0789c7;">T&Igrave;M KIẾM ĐỐI T&Aacute;C</span></h3>
                    <p style="text-align: center;">
                        Dicom với c&ocirc;ng nghệ vượt trội tạo ra những giải ph&aacute;p to&agrave;n diện cho kh&aacute;ch
                        h&agrave;ng, sản phẩm của Dicom được thiết kế để mang lại tiện &iacute;ch tối đa cho người d&ugrave;ng
                        với c&aacute;ch thức điều khiển linh hoạt v&agrave; th&ocirc;ng minh, ph&ugrave; hợp với mọi đối
                        tượng người d&ugrave;ng</p>
                </div>
                <div class="box-content-doitac col-xs-12 no-padding">
                    <div class="item-doitac col-md-4 col-sm-12 col-xs-12">
                        <div class="item-doitac-inner">
                            <img src="http://dicom.vn/upload/files/icon2.png">
                            <h3 style="text-align: center;">
                                Trở Th&agrave;nh Đối T&aacute;c</h3>
                            <p style="text-align: center;">
                                Dicom mang đến cơ hội hợp t&aacute;c tuyệt vời cho c&aacute;c doanh nghiệp muốn ph&aacute;t
                                triển trong lĩnh vực &quot;Nh&agrave; th&ocirc;ng minh&quot; với những ch&iacute;nh s&aacute;ch
                                hỗ trợ tối đa</p>
                            <a href="http://dicom.vn/tro-thanh-doi-tac-cua-dicom-ct10.html">Xem Chi Tiết</a>
                        </div>
                    </div>
                    <div class="item-doitac col-md-4 col-sm-12 col-xs-12">
                        <div class="item-doitac-inner">
                            <img src="http://dicom.vn/upload/files/icon3%20(1).png">
                            <h3 style="text-align: center;">
                                Năng Lực</h3>
                            <p style="text-align: center; height: 85px;">
                                Hệ thống sản phẩm của Dicom đ&atilde; được triển khai lắp đặt tại c&aacute;c c&ocirc;ng
                                tr&igrave;nh tr&ecirc;n khắp cả nước trong đ&oacute; c&oacute; mặt tại nhiều dự &aacute;n
                                lớn.</p>
                            <a href="http://dicom.vn/cong-trinh.html">Xem Chi Tiết</a>
                        </div>
                    </div>
                    <div class="item-doitac col-md-4 col-sm-12 col-xs-12">
                        <div class="item-doitac-inner">
                            <img src="http://dicom.vn/upload/files/icon4.png">
                            <h3 style="text-align: center;">
                                T&agrave;i liệu tham khảo</h3>
                            <p style="text-align: center;">
                                Bạn muốn biết hệ thống Dicom Smarthome hoạt động như thế n&agrave;o, sự li&ecirc;n kết
                                giữa c&aacute;c thiết bị v&agrave; chi tiết về từng sản phẩm của Dicom. H&atilde;y
                                download Brochure bản PDF</p>
                            <a href="http://dicom.vn/upload/files/Tai%20lieu%20huong%20dan/Brochure-Dicom-Smarthome-v3.pdf"
                               download>Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--ARTICLE -->
<div class="container-fluid bottom_content">
    <div class="row">
        <div class="container">

            <div class="row">
                <div class="col-md-4 sup_index cell_why_index">
                    <img src="images/icon_sup-min.png"/>
                    <p class="tit_sup">Hỗ trợ</p>
                    <p class="tit_hotline"><img src="images/phone_sp.png"/>Kỹ thuật: 0967 357 474</p>
                    <p class="tit_hotline"><img src="images/phone_sp.png"/>Kinh doanh:0967 357 597</p>
                    <p class="tit_hotline"><img src="images/mail_sp.png"/>Email: support@dicom.com.vn</p>
                    <p class="row_sup_online">
                        <span>Hỗ trợ 01</span>
                        <a href="skype:loitt68?chat">
                            <img src="images/skype.png"/>
                        </a>
                    </p>
                    <p class="row_sup_online">
                        <span>Hỗ trợ 02</span>
                        <a href="skype:lethithuytrang242?chat">
                            <img src="images/skype.png"/>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 sup_index  cell_why_index">
                    <div class="cell_why_inner">
                        <img src="http://dicom.vn/upload/images/about/TRANG%20CHU/LIST/2.jpg"/>
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
                        <img src="http://dicom.vn/upload/images/icon/DICOM_05.png"/>
                        <p class="tit_sup">Cơ hội khởi nghiệp</p>
                        <ul class="lisst_bot">
                            <li><a href="">Cơ hội phát triển đầy triển vọng với DICOM</a></li>
                            <li><a href="">Chính sách nhân sự hướng tới sự phát triển con người</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear_edit"></div>
                <div class="col-md-4 sup_index border_top_why cell_why_index">
                    <div class="cell_why_inner">
                        <img src="http://dicom.vn/upload/images/icon/DICOM_13.png"/>
                        <p class="tit_sup">Hướng dẫn lắp đặt</p>
                        <ul class="lisst_bot">
                            <li><a href="http://dicom.vn/ho-tro-ki-thuat.html">Tài liệu hướng dẫn sử dụng và lắp đặt</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 sup_index border_top_why cell_why_index">
                    <div class="cell_why_inner">
                        <img src="http://dicom.vn/upload/images/icon/DICOM_15.png"/>
                        <p class="tit_sup">Trở thành đối tác của DICOM</p>
                        <ul class="lisst_bot">
                            <li><a href="http://dicom.vn/chinh-sach-doi-tac.html">Chính sách đối tác</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 sup_index border_top_why cell_why_index">
                    <div class="cell_why_inner">
                        <img src="http://dicom.vn/upload/images/icon/DICOM_17.png"/>
                        <p class="tit_sup">Cập nhật tin tức DICOM IOT</p>
                        <ul class="lisst_bot">
                            <li><a href="http://dicom.vn/tin-tuc.html">Tin tức</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>