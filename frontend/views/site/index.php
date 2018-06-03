<?php
/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Home';
?>
<div class="motopress-wrapper content-holder clearfix">
    <div data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
        <div id="slider-wrapper" class="slider">
            <div id="camera59ad9697edbba" class="camera_wrap camera">
                <?php if (isset($listSlide) && !empty($listSlide)) {
                    foreach ($listSlide as $item) {
                        /** @var $item \common\models\News */
                        ?>
                        <div data-src='<?= $item->getImageSlide() ?>'
                             data-link='#'
                             data-thumb='<?= $item->getImageSlide() ?>'>
                            <div class="camera_caption fadeFromRight">
                                <h2><?= $item->title ?></h2>
                                <a href="<?= Url::toRoute(['site/detail-news', 'id' => $item->id]) ?>"
                                   class="btn btn-primary">Read more</a></div>
                        </div>
                    <?php }
                } ?>
            </div>


        </div><!-- .slider -->
    </div>
    <div class="container" id="home-it-solution">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                        <div id="post-203" class="post-203 page type-page status-publish hentry">
                            <h2 style="text-align: center;"><?= Yii::t('app', 'Wecome to company') ?></h2>
                            <?php if (isset($listSolution) && !empty($listSolution)) {
                                $i = 1;
                                foreach ($listSolution as $item) {
                                    /** @var $item \common\models\Category */
                                    if ($i == 1 || $i == 4) {
                                        echo "<div class='row'>";
                                    }
                                    ?>
                                    <div class="span4">
                                        <div class="service-box ">
                                            <figure class="icon">
                                                <a href="<?= Url::to(['site/detail-news', 'id' => $item->id]) ?>"><img
                                                            src="<?= $item->getImageLinkIcon() ?>"
                                                            alt="<?= $item->display_name ?>"/></a>
                                            </figure>
                                            <div class="service-box_body">
                                                <a href="<?= Url::to(['site/detail-news', 'id' => $item->id]) ?>"><h2 class="title"><?= $item->display_name ?></h2></a>
                                                <div class="service-box_txt">
                                                    <?= $item->description ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if ($i == 3 || $i == 6) {
                                        echo "</div>";
                                    }
                                    $i++;
                                }
                            } ?>
                            <div class="content_box" id="contact">
                                <div class="row">
                                    <?php if (isset($info) && !empty($info)) {
                                        /** @var $info \common\models\Info */
                                        ?>
                                        <div class="span4 "><img class="aligncenter size-full wp-image-1949"
                                                                 src="<?= $info->getImageLink() ?>"
                                                                 alt="page1-img1" width="370" height="275"/></div>
                                        <div class="span8 "><h2 style="text-align: center;">Contact</h2>
                                            <!--                                            <h5 style="text-align: center;">$info->title</h5>-->
                                            <p style="text-align: center;"><?= $info->description ?></p>
                                            <p style="text-align: center;"><a
                                                        href="<?= Url::toRoute(['site/contact']) ?>"
                                                        title="Read more" class="btn btn-primary btn-normal btn-inline "
                                                        target="_self">Read more</a><!-- .btn --></div>
                                    <?php } ?>
                                </div><!-- .row (end) -->
                            </div>
                        </div><!--post-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

