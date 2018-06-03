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
<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="single.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static"
                         data-motopress-static-file="static/static-title.php">
                        <section class="title-section">
                            <h1 class="title-header">Contact</h1>
                            <ul class="breadcrumb breadcrumb__t">
                                <li><a href="<?= Url::home() ?>">Home</a></li>
                                <li class="divider"></li>
                                <li class="active">Contact</li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div id="content" data-motopress-type="loop"
                         data-motopress-loop-file="loop/loop-single.php">
                        <?php if($contact){ ?>
                            <article id="post-<?= $contact->id ?>"
                                     class="post-<?= $contact->id ?> post type-post status-publish format-standard has-post-thumbnail hentry category-webdesign tag-lorem tag-sit-amet post__holder cat-5-id">
                                <!-- Post Content -->
                                <div class="post_content">
                                    <h3><?= $contact->title ?></h3>
                                    <p><?= $contact->content ?></p>
                                    <div class="clear"></div>
                                </div>
                                <!-- //Post Content -->
                            </article><!-- .share-buttons -->
                        <?php } ?>

                        <div class="related-posts">
                            <h3 class="related-posts_h">You may be interested</h3>
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