<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Info */
/* @var $form yii\widgets\ActiveForm */

$imageDisplayPreview = !$model->isNewRecord && !empty($model->image_display);

?>

<div class="form-body">

    <?php $form = ActiveForm::begin(
        [
            'options' => ['enctype' => 'multipart/form-data'],
            'method' => 'post',
        ]
    ); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_display')->widget(\kartik\file\FileInput::classname(), [
        'pluginOptions' => [

            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Chọn hình ảnh',
            'initialPreview' => $imageDisplayPreview ? [
                Html::img(Yii::getAlias('@web') . '/' . Yii::getAlias('@image_news') . "/" . $model->image_display, ['class' => 'file-preview-image', 'style' => 'width: 100%;']),

            ] : [],
        ],
        'options' => [
            'accept' => 'image/*',
        ],
    ])->hint(Yii::t('app', 'Vui lòng tải hình ảnh có kích thước 1920*700 px để hiển thị tốt nhất '));
    ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_support')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'google')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(\common\widgets\CKEditor::className(), [
        'preset' => 'full',
    ]);
    $_SESSION['KCFINDER'] = array(
        'disabled' => false
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
