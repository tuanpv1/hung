<?php

use common\models\Category;
use common\models\News;
use kartik\detail\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'QL Bài viết', 'url' => ['index']];
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
                    <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Bạn chắc chắn muốn xóa ' . $model->title . '?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
                <div class="tabbable-custom nav-justified">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'title',
                            [
                                'attribute' => 'status',
                                'value' => $model->getStatusName(),
                            ],
                            [
                                'attribute' => 'image_display',
                                'format' => 'html',
                                'value' => Html::img(Yii::getAlias('@web') . "/" . Yii::getAlias('@image_news') . "/" .$model->image_display, ['height' => '200px']),
                            ],
                            [
                                'attribute' => 'image_slide',
                                'format' => 'html',
                                'value' => Html::img(Yii::getAlias('@web') . "/" . Yii::getAlias('@image_news') . "/" .$model->image_slide, ['height' => '200px']),
                            ],
                            [
                                'attribute' => 'category_id',
                                'value'=> $model->category_id?Category::findOne($model->category_id)->display_name:''
                            ],
                            'description',
                            'content:html',
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
            </div>
        </div>
    </div>
</div>


