<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HomeSolution */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Home Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-solution-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'image_display',
                'format' => 'html',
                'value' => Html::img(Yii::getAlias('@web') . "/" . Yii::getAlias('@image_news') . "/" .$model->image_display, ['height' => '200px']),
            ],
            'title',
            'description',
            'content:ntext',
            [
                'attribute' => 'status',
                'value' => $model->getStatusName(),
            ],
            [
                'attribute'=>'created_at',
                'value' => date('d/m/Y H:i:s',$model->created_at),
            ],
            [
                'attribute'=>'updated_at',
                'value' => date('d/m/Y H:i:s',$model->updated_at),
            ],
        ],
    ]) ?>

</div>
