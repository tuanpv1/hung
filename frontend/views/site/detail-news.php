<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/8/2017
 * Time: 4:59 PM
 */
use common\models\HomeSolution;
use common\models\News;
use yii\helpers\Url;

if (isset($new->category_id)) {
    /** @var $new News */
} else {
    /** @var $new HomeSolution */
}
?>
<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="single.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static"
                         data-motopress-static-file="static/static-title.php">
                        <section class="title-section">
                            <h1 class="title-header"><?= isset($new->category_id) ? $new->getNameCategory() : $new->title ?></h1>
                            <ul class="breadcrumb breadcrumb__t">
                                <li><a href="<?= Url::home() ?>">Home</a></li>
                                <li class="divider"></li>
                                <?php if (isset($new->category_id)) {
                                    ?>
                                    <li>
                                        <a href="<?= Url::to(['site/index-news', 'category_id' => $new->category_id]) ?>"><?= $new->getNameCategory() ?></a>
                                    </li>
                                    <li class="divider"></li>
                                    <?php
                                } ?>
                                <li class="active"><?= $new->title ?></li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div id="content" data-motopress-type="loop"
                         data-motopress-loop-file="loop/loop-single.php">
                        <article id="post-<?= $new->id ?>"
                                 class="post-<?= $new->id ?> post type-post status-publish format-standard has-post-thumbnail hentry category-webdesign tag-lorem tag-sit-amet post__holder cat-5-id">
                            <figure class="featured-thumbnail thumbnail large">
                                <?php if (isset($new->category_id)) {
                                    ?>
                                    <img src="//" data-src="<?= $new->getImageLink() ?>" alt="<?= $new->title ?>">
                                    <?php
                                } else {
                                    ?>
                                    <img style="width: 30%;background-color: #31c1e4" src="//"
                                         data-src="<?= HomeSolution::getImageLinkDetail($new->image_display) ?>"
                                         alt="<?= $new->title ?>">
                                    <?php
                                } ?>
                            </figure>
                            <!-- Post Content -->
                            <div class="post_content">
                                <h3><?= $new->title ?></h3>
                                <p><?= $new->description ?></p>
                                <p><?= $new->content ?></p>
                                <div class="clear"></div>
                            </div>
                            <!-- //Post Content -->

                            <!-- Post Meta -->
                            <div class="post_meta meta_type_line">
                                <div class="post_meta_unite clearfix">
                                    <div class="meta_group clearfix">
                                        <?php if (isset($new->category_id)) {
                                            ?>
                                            <div class="post_category">
                                                <i class="icon-bookmark"></i>
                                                <a href="<?= \yii\helpers\Url::to(['index-news', 'category_id' => $new->category_id]) ?>"
                                                   rel="category tag"><?= $new->getNameCategory() ?></a>
                                            </div>
                                            <div class="post_author">
                                                <i class="icon-user"></i>
                                                <a href="#" title="Posts by admin"
                                                   rel="author"><?= $new->getAuthorPoster() ?></a>
                                            </div>

                                            <?php
                                        } ?>
                                        <div class="post_date">
                                            <i class="icon-calendar"></i>
                                            <time datetime="2013-02-14T20:26:57"><?= date('d-m-Y H:i:s', $new->updated_at) ?></time>
                                        </div>
                                    </div>
                                    <div class="meta_group clearfix"></div>
                                    <div class="meta_group clearfix"></div>
                                </div>
                            </div><!--// Post Meta -->
                        </article><!-- .share-buttons -->

                        <div class="related-posts"><h3 class="related-posts_h">You may be interested</h3>
                            <ul class="related-posts_list clearfix">
                                <?php if ($related_post) {
                                    {
                                        foreach ($related_post as $item) {
                                            /** @var $item News */
                                            ?>
                                            <li class="related-posts_item">
                                                <figure class="thumbnail featured-thumbnail">
                                                    <a href="<?= Url::to(['site/detail-news', 'id' => $item->id]) ?>" title="<?= $item->title ?>">
                                                        <img data-src="<?= $item->getImageLink() ?>" alt="<?= $item->title ?>"/>
                                                    </a>
                                                </figure>
                                                <a href="<?= Url::to(['site/detail-news', 'id' => $item->id]) ?>"><?= $item->title ?></a>
                                            </li>
                                            <?php
                                        }
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
