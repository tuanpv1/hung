<?php

use common\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
$imageSlidePreview = !$model->isNewRecord && !empty($model->image);
?>

<div class="form-body">

    <?php $form = ActiveForm::begin(
        [
            'options' => ['enctype' => 'multipart/form-data'],
            'method' => 'post',
        ]
    ); ?>

    <?= $form->field($model, 'display_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getListStatus()) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'is_display')->checkbox() ?>
    <?php
    $dataList = \common\models\Category::getTreeCategories();
    $disableId = false;
    if (!$model->isNewRecord) {
        $disableId = $model->id;
    }
    echo $form->field($model, 'parent_id')->dropDownList($dataList,
        [
            'prompt' => '-Select parent-',
            'options' => \common\models\Category::getAllChildCats($model->id) + [$model->id => ['disabled' => true]]
        ]);
    ?>

    <?= $form->field($model, 'image')->widget(\kartik\file\FileInput::classname(), [
        'pluginOptions' => [

            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Chọn hình ảnh',
            'initialPreview' => $imageSlidePreview ? [
                Html::img(Yii::getAlias('@web') . '/' . Yii::getAlias('@image_news') . "/" . $model->image, ['class' => 'file-preview-image', 'style' => 'width: 100%;']),

            ] : [],
        ],
        'options' => [
            'accept' => 'image/*',
        ],
    ])->hint(Yii::t('app', 'Vui lòng tải hình ảnh có kích thước 1920*700 px để hiển thị tốt nhất '));
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
