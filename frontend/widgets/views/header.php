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
<header class="motopress-wrapper header">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php"
                 data-motopress-wrapper-type="header" data-motopress-id="59ad9697e4eb9">
                <div class="row-1">
                    <div class="container">
                        <div class="row">
                            <div class="span12" data-motopress-type="static"
                                 data-motopress-static-file="static/static-extra.php">
                                <div class="contacts">
                                    <h4 class="widget-title">Address</h4>
                                    <span class="address"><?= $info ? $info->address : 'Updating ... ' ?></span>
                                    <span class="pull-right">
                                        <h4 class="widget-title">Phones:</h4>
                                        <span class="phones">
                                            <span class="phone"><?= $info ? $info->phone : 'Updating ... ' ?></span>
		                                </span>
	                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-2">
                    <div class="container">
                        <div class="row">
                            <div class="span4" data-motopress-type="static"
                                 data-motopress-static-file="static/static-logo.php">
                                <!-- BEGIN LOGO -->
                                <div class="logo pull-left">
                                    <a href="<?= Url::home() ?>"
                                       class="logo_h logo_h__img"><img style="width: 60%"
                                                                       src="<?= Yii::$app->getUrlManager()->getBaseUrl() ?>/images/logo.jpg"
                                                                       alt="Repair Theme" title=""></a>
                                </div>
                                <!-- END LOGO -->            </div>
                            <div class="span8" data-motopress-type="static"
                                 data-motopress-static-file="static/static-nav.php">
                                <!-- BEGIN MAIN NAVIGATION -->
                                <nav class="nav nav__primary clearfix">
                                    <ul id="topnav" class="sf-menu">
                                        <li id="menu-item-1807"
                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item">
                                            <a href="<?= Url::home() ?>">Home</a>
                                        </li>
                                        <?php if (isset($listCategory) && !empty($listCategory)) {
                                            foreach ($listCategory as $category) {
                                                /** @var $category \common\models\Category */
                                                $homeItSolution = \common\models\Category::findAll(['status'=>\common\models\Category::STATUS_ACTIVE,'parent_id'=>$category->id])
                                                ?>
                                                <li id="menu-item-1810"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page">
                                                    <a href="#"><?= $category->display_name ?> </a>
                                                    <ul class="sub-menu">
                                                        <?php if (isset($homeItSolution) && !empty($homeItSolution)) {
                                                            foreach ($homeItSolution as $item) {
                                                                /** @var $item \common\models\Category */
                                                                ?>
                                                                <li id="menu-item-1815"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page">
                                                                    <a href="<?= Url::to(['site/index-news', 'category_id' => $item->id]) ?>"><?= $item->display_name ?></a>
                                                                </li>
                                                            <?php }
                                                        } ?>

                                                    </ul>
                                                </li>
                                            <?php }
                                        } ?>
                                        <li id="menu-item-1804"
                                            class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="<?= Url::to(['site/contact']) ?>">Contact</a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::toRoute(['site/about']) ?>">About</a>
                                        </li>
                                    </ul>
                                </nav><!-- END MAIN NAVIGATION -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

