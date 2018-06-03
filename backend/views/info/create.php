<?php

use common\models\Info;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = 'Khởi tạo thông tin';
$this->params['breadcrumbs'][] = ['label' => 'QL Giới thiệu', 'url' => ['view', 'id' => Info::ID]];
$this->params['breadcrumbs'][] = $this->title;
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
