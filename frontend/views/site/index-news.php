<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/8/2017
 * Time: 4:02 PM
 */
use common\models\News;
use frontend\widgets\MenuWidget;
use yii\helpers\Url;

$title = $cate ? $cate->display_name : '';
$this->title = 'Service ' . $title;
?>
<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="index.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static"
                         data-motopress-static-file="static/static-title.php">
                        <section class="title-section">
                            <h1 class="title-header">
                                <?= $cate ? $cate->display_name : '' ?>
                            </h1>
                            <ul class="breadcrumb breadcrumb__t">
                                <li>
                                    <a href="<?= Url::to(['site/index']) ?>">Home</a>
                                </li>
                                <li class="divider"></li>
                                <li class="active"><?= $cate ? $cate->display_name : '' ?></li>
                            </ul>
                        </section><!-- .title-section -->
                    </div>
                </div>
                <div class="row">
                    <div id="content" data-motopress-type="loop"
                         data-motopress-loop-file="loop/loop-blog.php">
                        <!-- displays the tag's description from the Wordpress admin -->
                        <?php if (isset($listNews) && !empty($listNews)) {
                            foreach ($listNews as $news) {
                                /** @var $news News */
                                ?>
                                <div class="post_wrapper">
                                    <article id="post-1910"
                                             class="post-1910 post type-post status-publish format-standard has-post-thumbnail hentry category-coding tag-elit tag-ipsum-dolor tag-lorem post__holder cat-2-id">
                                        <header class="post-header">
                                            <h2 class="post-title">
                                                <a href="<?= Url::to(['site/detail-news', 'id' => $news->id]) ?>"
                                                   title="<?= $news->title ?>"><?= $news->title ?></a>
                                            </h2>
                                        </header>
                                        <figure class="featured-thumbnail thumbnail large"><a
                                                href="<?= Url::to(['site/detail-news', 'id' => $news->id]) ?>"
                                                title="<?= $news->title ?>">
                                                <img src="//" data-src="<?= $news->getImageLink() ?>"
                                                     alt="<?= $news->title ?>"></a>
                                        </figure>
                                        <!-- Post Content -->
                                        <div class="post_content">
                                            <div class="excerpt">
                                                <?= $news->description ?>&hellip;
                                            </div>
                                            <a href="<?= Url::to(['site/detail-news', 'id' => $news->id]) ?>"
                                               class="btn btn-primary">Read more</a>
                                            <div class="clear"></div>
                                        </div>
                                    </article>
                                </div>
                                <?php
                            }
                        } ?>

                        <div class="pagination pagination__posts">
                            <?php
                            $pagination = new \yii\data\Pagination(['totalCount' => $pages->totalCount, 'pageSize' => 10]);
                            echo \yii\widgets\LinkPager::widget([
                                'pagination' => $pagination,
                            ]);
                            ?>
                        </div>
                        <!-- Posts navigation -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
