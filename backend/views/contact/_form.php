<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */
/* @var $form yii\widgets\ActiveForm */
$imageSlidePreview = !$model->isNewRecord && !empty($model->image);
?>
<div class="form-body">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
        'method' => 'post',
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->widget(\kartik\file\FileInput::classname(), [
        'pluginOptions' => [

            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Chọn hình ảnh',
            'initialPreview' => $imageSlidePreview ? [
                Html::img(Yii::getAlias('@web') . '/' . Yii::getAlias('@image_contact') . "/" . $model->image, ['class' => 'file-preview-image', 'style' => 'width: 100%;']),

            ] : [],
        ],
        'options' => [
            'accept' => 'image/*',
        ],
    ]);
    ?>

    <?php echo $form->field($model, 'content')->widget(\common\widgets\CKEditor::className(), [
        'preset' => 'full',
    ]);
    $_SESSION['KCFINDER'] = array(
        'disabled' => false
    ); ?>

    <?= $form->field($model, 'map')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
