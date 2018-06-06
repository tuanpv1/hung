<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 6/4/2018
 * Time: 1:45 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var \common\models\Subscriber $model */
?>
<?php $form = ActiveForm::begin(['method' => 'post', 'action' => \yii\helpers\Url::to(['site/add-subscriber'])]); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Họ và tên (*)'])->label(false) ?>

<?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => 'Địa chỉ (*)'])->label(false) ?>

<?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Điện thoại (*)'])->label(false) ?>

<?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email (*)'])->label(false) ?>

<?= $form->field($model, 'content')->textarea(['placeholder' => 'Nội dung (*)', 'rows' => 6])->label(false) ?>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app','Gửi'), ['class' => 'btn_submit_edit']) ?>
</div>

<?php ActiveForm::end(); ?>
