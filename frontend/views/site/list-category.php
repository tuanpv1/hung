<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/9/2017
 * Time: 9:17 AM
 */
use common\models\Category;
use common\models\News;
use yii\helpers\Url;

?>
<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="page-Portfolio2Cols-filterable.php"
                 data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static"
                         data-motopress-static-file="static/static-title.php">
                        <section class="title-section">
                            <h1 class="title-header">Service</h1>
                            <ul class="breadcrumb breadcrumb__t">
                                <li><a href="<?= Url::home() ?>">Home</a></li>
                                <li class="divider"></li>
                                <li class="active">Service</li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div id="content" class="row">
                    <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-portfolio2.php">
                        <div class="page_content">
                            <div class="clear"></div>
                        </div>
                        <div class="filter-wrapper clearfix">
                            <div class="pull-right">
                                <strong>Danh Mục: </strong>
                                <ul id="filters" class="filter nav nav-pills">
                                    <li class="active"><a href="#" data-count="13" data-filter>All</a></li>
                                    <?php
                                    if ($listCats) {
                                        foreach ($listCats as $item) {
                                            /** @var $item Category */
                                            ?>
                                            <li><a href="#" data-count="4"
                                                   data-filter=".term_id_<?= $item->id ?>"><?= $item->display_name ?></a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <ul id="portfolio-grid" class="filterable-portfolio thumbnails portfolio-2cols"
                            data-cols="2cols">
                            <?php
                            if ($listNews) {
                                foreach ($listNews as $item) {
                                    /** @var $item News */
                                    ?>
                                    <li class="portfolio_item <?= "term_id_" . $item->id ?>">
                                        <div class="portfolio_item_holder">
                                            <figure class="thumbnail thumbnail__portfolio">
                                                <a href="<?= $item->getImageLink() ?>" class="image-wrap" title="<?= $item->title ?>" rel="prettyPhoto">
                                                    <img src="<?= $item->getImageLink() ?>"
                                                         alt="<?= $item->title ?>"/>
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </figure>
                                            <div class="caption caption__portfolio">
                                                <h3>
                                                    <a href="<?= Url::to(['site/detail-news', 'id' => $item->id]) ?>"><?= $item->title ?></a>
                                                </h3>
                                                <p class="excerpt"></p>
                                                <p><a href="<?= Url::to(['site/detail-news', 'id' => $item->id]) ?>"
                                                      class="btn btn-primary">Read more</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>

                        <div class="pagination pagination__posts">
                            <?php
                            $pagination = new \yii\data\Pagination(['totalCount' => $pages->totalCount, 'pageSize' => 10]);
                            echo \yii\widgets\LinkPager::widget([
                                'pagination' => $pagination,
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>