<?php

use kartik\form\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
$imageDisplayPreview = !$model->isNewRecord && !empty($model->image_display);
$imageSlidePreview = !$model->isNewRecord && !empty($model->image_slide);
$icon = !$model->isNewRecord && !empty($model->icon);

$check = Html::getInputId($model, 'is_file');

$js = <<<JS
    $("#$check").change(function() {
        if($('#$check').is(':checked')){
            $('#image-hvv').show('slow');
        }else {
            $('#image-hvv').hide('slow');
        }
    });
JS;
$js_default = <<<JS
     if($('#$check').is(':checked')){
            $('#image-hvv').show();
        }else {
            $('#image-hvv').hide();
        }
JS;
$this->registerJs($js_default, \yii\web\View::POS_READY);
$this->registerJs($js, \yii\web\View::POS_READY);

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

    <?= $form->field($model, 'icon')->widget(\kartik\file\FileInput::classname(), [
        'pluginOptions' => [

            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Chọn hình ảnh',
            'initialPreview' => $icon ? [
                Html::img(Yii::getAlias('@web') . '/' . Yii::getAlias('@image_news') . "/" . $model->icon, ['class' => 'file-preview-image', 'style' => 'width: 100%;']),

            ] : [],
        ],
        'options' => [
            'accept' => 'image/*',
        ],
    ])->hint(Yii::t('app', 'Vui lòng tải hình ảnh có kích thước 1920*700 px để hiển thị tốt nhất '));
    ?>

    <?= $form->field($model, 'status')->dropDownList($model->getListStatus()) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'content')->widget(\common\widgets\CKEditor::className(), [
        'preset' => 'full',
    ]);
    $_SESSION['KCFINDER'] = array(
        'disabled' => false
    ); ?>

    <?= $form->field($model, 'is_file')->checkbox() ?>

    <div id="image-hvv">
        <?= $form->field($model, 'file')->widget(\kartik\file\FileInput::classname(), [
            'pluginOptions' => [

                'showCaption' => false,
                'showRemove' => false,
                'showUpload' => false,
                'browseClass' => 'btn btn-primary btn-block',
                'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                'browseLabel' => 'Chọn hình ảnh',
                'initialPreview' => $imageSlidePreview ? [
                    Html::img(Yii::getAlias('@web') . '/' . Yii::getAlias('@image_news') . "/" . $model->image_slide, ['class' => 'file-preview-image', 'style' => 'width: 100%;']),

                ] : [],
            ],
            'options' => [
                'accept' => '.pdf,.doc,.xlsx,.xls,.docx',
            ],
        ]);
        ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tạo mới') : Yii::t('app', 'Cập nhật'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
