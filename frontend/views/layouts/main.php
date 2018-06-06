<?php
use frontend\widgets\Alert;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?= \frontend\widgets\Head::widget() ?>
    <?php $this->head() ?>
</head>
<body class="index-c">
<?php $this->beginBody() ?>
<div id="motopress-main" class="main-holder">
    <?= Alert::widget() ?>
    <?= \frontend\widgets\HeaderWidget::widget() ?>
    <?= $content ?>
    <?= \frontend\widgets\FooterWidget::widget() ?>
</div>
<?= \frontend\widgets\FooterWidget::actionFoot() ?>
<?php $this->endBody() ?>
</body>
<?php $this->endPage() ?>
