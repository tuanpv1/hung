<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = 'Xem thông tin giới thiệu';
$this->params['breadcrumbs'][] = ['label' => 'QL Giới thiệu', 'url' => ['view', 'id' => \common\models\Info::ID]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase"><?= $this->title ?></span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <p>
                    <?= Html::a('Cập nhật', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                </p>
                <div class="tabbable-custom nav-justified">

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'title',
                            [
                                'attribute' => 'image_display',
                                'format' => 'html',
                                'value' => Html::img(Yii::getAlias('@web') . "/" . Yii::getAlias('@image_news') . "/" . $model->image_display, ['height' => '200px']),
                            ],
                            'phone',
                            'phone_support',
                            'address',
                            'facebook',
                            'youtube',
                            'google',
                            'skype1',
                            'skype2',
                            'description',
                            'content:html',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

