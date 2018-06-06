<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 6/6/2018
 * Time: 9:56 AM
 */
use common\models\News;
use yii\helpers\Url;

?>
<div class="clear"></div>
<div class="container-fluid doitac-index">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="box-heading-doitac col-xs-12">
                    <h3 style="text-align: center;">
                        <span style="color:#0789c7;">TÌM KIẾM ĐỐI TÁC</span></h3>
                    <p style="text-align: center;">
                        Dicom với c&ocirc;ng nghệ vượt trội tạo ra những giải ph&aacute;p to&agrave;n diện cho kh&aacute;ch
                        h&agrave;ng, sản phẩm của Dicom được thiết kế để mang lại tiện &iacute;ch tối đa cho người d&ugrave;ng
                        với c&aacute;ch thức điều khiển linh hoạt v&agrave; th&ocirc;ng minh, ph&ugrave; hợp với mọi đối
                        tượng người d&ugrave;ng</p>
                </div>
                <div class="box-content-doitac col-xs-12 no-padding">
                    <?php
                    if ($therePosts) {
                        /** @var News $post */
                        foreach ($therePosts as $post) {
                            ?>
                            <div class="item-doitac col-md-4 col-sm-12 col-xs-12">
                                <div class="item-doitac-inner">
                                    <img src="<?= Url::to(['site/detail-new', 'id' => $post->id]) ?>">
                                    <h3 style="text-align: center;">
                                        <?= $post->title ?></h3>
                                    <p style="text-align: center;">
                                        <?= $post->description ?></p>
                                    <a href="<?= Url::to(['site/detail-new', 'id' => $post->id]) ?>">Xem Chi Tiết</a>
                                    <?php if($post->is_file){ ?>
                                        <a href="<?= $post->getFile() ?>" download>Download</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--ARTICLE -->
