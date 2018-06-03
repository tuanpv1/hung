<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/8/2017
 * Time: 4:59 PM
 */

/** @var $new \common\models\Info */
?>
<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="single.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static"
                         data-motopress-static-file="static/static-title.php">
                        <section class="title-section">
                            <h1 class="title-header">About</h1>
                            <!-- BEGIN BREADCRUMBS-->
                            <ul class="breadcrumb breadcrumb__t">
                                <li><a href="<?= \yii\helpers\Url::toRoute(['site/index']) ?>">Home</a></li>
                                <li class="divider"></li>
                                <li class="active"><a href="">About</a></li>
                            </ul>            <!-- END BREADCRUMBS -->
                        </section><!-- .title-section -->
                    </div>
                </div>
                <?php if (isset($new) && !empty($new)){ ?>
                <div class="row">
                    <div class="span8 right right" id="content" data-motopress-type="loop"
                         data-motopress-loop-file="">
                                <article id="post-137" class="clearfix">
                                    <blockquote class="testimonial_bq">
                                        <div class="testimonial_content">
                                            <p><?= $new->description ?></p>
                                            <p><?= $new->content ?></p>
                                            <div class="clear"></div>
                                        </div>
                                    </blockquote>
                                </article>
                            </div>
                            <?= \frontend\widgets\MenuWidget::widget() ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
