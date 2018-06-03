<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
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
    <?= \frontend\widgets\HeaderWidget::widget() ?>
    <?= Alert::widget() ?>
    <?= $content ?>
    <?= \frontend\widgets\FooterWidget::widget() ?>
</div>
<?= \frontend\widgets\FooterWidget::actionFoot() ?>
<?php $this->endBody() ?>
<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : ((document.querySelector('h1') != null)? document.querySelector('h1').innerHTML : '') );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=8f2b7dfd173fd57653e348b255584d77&data=eyJzc29faWQiOjUxMTk2MTUsImhhc2giOiI5YWE2NjlmZGNhMTQ4ODg4ZDgyMGYxNWQ4NWQ5OWY3MCJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
</body>
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
<?php $this->endPage() ?>
