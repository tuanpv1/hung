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
<footer class="motopress-wrapper footer">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-footer.php"
                 data-motopress-wrapper-type="footer" data-motopress-id="59ad96981aaad">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="span8 footer-divider footer-divider__right">
                                <div class="row">
                                    <div class="span4" data-motopress-type="dynamic-sidebar"
                                         data-motopress-sidebar-id="footer-sidebar-1">
                                        <div id="nav_menu-2" class="widget-footer">
                                            <h4 class="widget-title">Quick link</h4>
                                            <div class="menu-footer-menu-container">
                                                <ul id="menu-footer-menu" class="menu">
                                                    <li id="menu-item-1816"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item menu-item-1816">
                                                        <a href="<?= Url::home() ?>">Home</a>
                                                    </li>
                                                    <li id="menu-item-1821"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1821">
                                                        <a href="#home-it-solution">Home IT Solutions </a>
                                                    </li>
                                                    <li id="menu-item-1820"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1819">
                                                        <a href="<?= Url::to(['site/list-category']) ?>">Business IT
                                                            Solutions</a>
                                                    </li>
                                                    <li id="menu-item-1822"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1819">
                                                        <a href="<?= Url::to(['site/index']) ?>#contact">Contact</a>
                                                    </li>
                                                    <li id="menu-item-1821"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1821">
                                                        <a href="<?= Url::to(['site/about']) ?>">About</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span4" data-motopress-type="dynamic-sidebar"
                                         data-motopress-sidebar-id="footer-sidebar-4">
                                        <div id="categories-2" class="widget-footer">
                                            <h4 class="widget-title">Service</h4>
                                            <ul>
                                                <?php
                                                if ($listCategory) {
                                                    foreach ($listCategory as $item) {
                                                        /** @var $item \common\models\Category */
                                                        ?>
                                                        <li class="cat-item cat-item-<?= $item->id ?>"><a
                                                                    href="<?= Url::to(['site/index-news', 'category_id' => $item->id]) ?>"><?= $item->display_name ?></a>
                                                        </li>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span4 footer-divider">
                                <div data-motopress-type="static"
                                     data-motopress-static-file="static/static-extra.php">
                                    <div class="contacts">
                                        <h4 class="widget-title">Address</h4>
                                        <span class="address"><?= $info ? $info->address : 'Updating ... ' ?></span>
                                        <span class="pull-right">
                                            <h4 class="widget-title">Phone</h4>
                                            <span class="phones">
                                            <span class="phone"><?= $info ? $info->phone : 'Updating ... ' ?></span>
                                                <br></br>
                                                <h4 class="widget-title">Trading hours</h4>
                                                <span class="hours">Mon-Sat 9:00 am to 9:00 pm		</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="social-nets-wrapper" data-motopress-type="static"
                                     data-motopress-static-file="static/static-social-networks.php">
                                    <h4 class="widget-title">Follow us</h4>
                                    <ul class="social">
                                        <li><a href="https://www.facebook.com/Ht-Tech-1487669748201250/?modal=admin_todo_tour" title="facebook"><i class="icon-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/httechptyltd" title="twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/u/1/114308002043787052598?pageId=none" title="google"><i class="icon-google-plus"></i></a></li>
                                        <li><a href="https://www.instagram.com/httechptyltd/" title="instagram"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#" title="skype"><i class="icon-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row copyright">
                            <div class="span6" data-motopress-type="static"
                                 data-motopress-static-file="static/static-footer-text.php">
                                <div id="footer-text" class="footer-text">
                                    <a href="<?= Url::home() ?>" title=""
                                       class="site-name"></a> &copy; HT-TECH Pty Ltd | ABN 85589099156
                                    <a href="<?= Url::home() ?>" title="<?= $info->title ?>">All Rights
                                        Reserved.</a>
                                </div>
                            </div>
                            <div class="span6" data-motopress-type="static"
                                 data-motopress-static-file="static/static-footer-nav.php">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
