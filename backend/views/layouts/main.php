<?php
use common\models\AuthItem;
use common\models\Contact;
use common\models\GapGeneral;
use common\models\Info;
use common\models\News;
use common\models\User;
use common\widgets\Alert;
use common\widgets\Nav2;
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$this->registerJs("Metronic.init();");
$this->registerJs("Layout.init();");
$arrlang = array();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<?php $this->beginBody() ?>
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">

        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?= Yii::$app->homeUrl ?>">
                <!--                <img src="-->
                <? //= Url::to("@web/img/") ?><!--" alt="logo" class="logo-default"/>-->
            </a>

            <div class="menu-toggler sidebar-toggler hide">
            </div>
        </div>

        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->


                <li class="dropdown dropdown-user">
                    <?php
                    if (Yii::$app->user->isGuest) {

                    } else {
                    ?>
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <img alt="" class="img-circle" src="<?= Url::to("@web/img/avatar2.jpg") ?>"/>
                        <span class="username username-hide-on-mobile">
					<?= Yii::$app->user->identity->username ?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="<?= Url::to(['user/info']) ?>">
                                <i class="icon-user"></i> <?= Yii::t("app", "Thông tin tài khoàn") ?> </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['site/logout']) ?>" data-method='post'>
                                <i class="icon-logout"></i> <?= Yii::t("app", "Đăng xuất") ?> </a>
                        </li>
                    </ul>
                </li>
                <?php
                }
                ?>

                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="<?= Url::to(['site/logout']) ?>" class="dropdown-toggle" data-method='post'>
                        <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <?php


            $rightItems = [
//                [
//                    'label' => Yii::t('app', 'QL Danh mục'),
//                    'url' => ['category/index'],
//                ],
                [
                    'label' => Yii::t('app', 'QL Bài viết'),
                    'url' => ['news/index'],
                ],
                [
                    'label' => Yii::t('app', 'QL Sản phẩm'),
                    'url' => ['product/index'],
                ],
                [
                    'label' => Yii::t('app', 'QL Giới thiệu'),
                    'url' => ['about/view'],
                ],
                [
                    'label' => Yii::t('app', 'QL Thông tin hệ thống'),
                    'url' => ['info/view', 'id' => Info::ID],
                ],
                [
                    'label' => Yii::t('app', 'QL Liên hệ'),
                    'url' => ['contact/view'],
                ],
                [
                    'label' => '<i class="glyphicon glyphicon-menu-hamburger"></i> ' . \Yii::t('app', 'Hệ thống'),
                    'url' => 'javascript:;',
                    'encode' => false,
                    'items' => [
                        [
                            'encode' => false,
                            'label' => '<i class="icon-users"></i> ' . \Yii::t('app', 'QL người dùng'),
                            'url' => ['user/index'],
                            'require_auth' => true,
                        ],
                        [
                            'encode' => false,
                            'label' => '<i class=" icon-eyeglasses"></i> ' . \Yii::t('app', 'QL phân  quyền'),
                            'url' => ['rbac-backend/permission'],
                            'require_auth' => true,
                        ],
                        [
                            'encode' => false,
                            'label' => '<i class=" icon-eyeglasses"></i> ' . \Yii::t('app', 'QL nhóm  quyền'),
                            'url' => ['rbac-backend/role'],
                            'require_auth' => true,
                        ],
                    ]
                ],
            ];


            echo Nav2::widget([
                'options' => ['class' => "page-sidebar-menu  page-sidebar-fixed", 'data-keep-expanded' => "false", 'data-auto-scroll' => "true", 'data-slide-speed' => "200"],
                'items' => $rightItems,
                'activateParents' => true,
                'validateAdminCallback' => function ($user) {
                    /**
                     * @var \yii\web\User $user
                     */
                    if ($user && isset($user->identity->username)) {
                        /**
                         * @var $sp_user User
                         */
                        $sp_user = $user->identity;
                        return false;
                    } else {
                        return false;
                    }
                }
            ]);

            ?>
        </div>
    </div>
    <!-- END SIDEBAR -->


    <!-- BEGIN CONTAINER -->
    <div class="page-content-wrapper">
        <!--    <div class="page-head">-->
        <!--        <div class="container-fluid">-->
        <!--            <div class="page-title">-->
        <!--                <h1>--><?php //echo $this->title ?><!--</h1>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <div class="page-content">

            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'options' => [
                    'class' => 'page-breadcrumb breadcrumb'
                ],
//                'itemTemplate' => "<li>{link}<i class=\"fa fa-circle\"></i></li>\n",
                'activeItemTemplate' => "<li class=\"active\">{link}</li>\n"
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>

        </div>
    </div>
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div class="page-footer footer">
    <div class="container-fluid">
        <p>
            <b>&copy;<?= Yii::t("app", "Copyright") ?>  <?php echo date('Y'); ?> </b><?= Yii::t("app", ". All Rights Reserved.") ?>
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
