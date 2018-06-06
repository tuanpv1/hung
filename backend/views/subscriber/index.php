<?php

use common\models\Subscriber;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubscriberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subscribers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs font-green-sharp"></i>
                    <span
                            class="caption-subject font-green-sharp bold uppercase"><?= $this->title ?> </span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                </div>
            </div>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'name',
                    [
                        'class' => '\kartik\grid\DataColumn',
                        'attribute' => 'status',
                        'format' => 'html',
                        'value' => function ($model, $key, $index, $widget) {
                            /** @var $model Subscriber */
                            if ($model->status == Subscriber::STATUS_BOOKED) {
                                return '<span class="label label-danger">' . $model->getStatusName() . '</span>';
                            }
                            if($model->status == Subscriber::STATUS_CANCEL){
                                return '<span class="label label-warning">' . $model->getStatusName() . '</span>';
                            }
                            if($model->status == Subscriber::STATUS_COME){
                                return '<span class="label label-success">' . $model->getStatusName() . '</span>';
                            }
                            if($model->status == Subscriber::STUTUS_CONFIRM){
                                return '<span class="label label-info">' . $model->getStatusName() . '</span>';
                            }
                        },
                        'filterType' => GridView::FILTER_SELECT2,
                        'filter' => Subscriber::listStatus(),
                        'filterWidgetOptions' => [
                            'pluginOptions' => ['allowClear' => true],
                        ],
                        'filterInputOptions' => ['placeholder' => "Tất cả"],
                    ],
                    'address',
                    'phone',
                    'email:email',
                     'content',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>

