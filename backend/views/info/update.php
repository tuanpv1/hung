<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = 'Cập nhật thông tin giới thiệu';
$this->params['breadcrumbs'][] = ['label' => 'QL Giới thiệu', 'url' => ['view', 'id' => \common\models\Info::ID]];
$this->params['breadcrumbs'][] = 'Cật nhật';
?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i><?= $this->title ?></div>
            </div>
            <div class="portlet-body form">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
