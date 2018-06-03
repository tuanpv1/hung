<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 6/3/2018
 * Time: 5:09 PM
 */
use yii\helpers\Url;

/** @var \common\models\Info $info */

?>
<div class="container-fluid">
    <div class="row">
        <div class="header">
            <div class="button_header">
                <h1 class="title_slide_index"><?= $info ? $info->title : '' ?></span></h1>
                <p class="tit_small_index"><?= $info ? $info->description : '' ?></p>
                <a class="bt-header-link1" href='<?= Url::to(['site/about']) ?>'>Giới thiệu</a>
                <a class="bt-header-link2" href='<?= Url::to(['site/product']) ?>'>Sản phẩm</a>
            </div>
            <script type="text/javascript">
                $(window).load(function () {
                    $('#slide_edit').nivoSlider({
                        effect: 'random',
                        directionNav: false,
                        controlNav: true,
                        controlNavThumbs: false,
                        pauseOnHover: true,
                        manualAdvance: false,
                        prevText: '',
                        nextText: '',
                        randomStart: false
                    });
                });
            </script>
            <div id="slide_edit" class="nivoSlider">
                <?php
                if ($listSlide) {
                    /** @var \common\models\News $item */
                    foreach ($listSlide as $item) {
                        ?>
                        <a href="<?= Url::to(['site/detail', 'id' => $item->id]) ?>">
                            <img src="<?= $item->getImageSlide() ?>"
                                 alt="<?= $item->title ?>"
                                 width="100%"/>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
            <!-- SLIDESHOW END -->
        </div>
    </div>
</div>
