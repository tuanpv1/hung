<?php

namespace backend\controllers;

use common\models\News;
use common\models\NewsSearch;
use Yii;
use yii\bootstrap\ActiveForm;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class PartnerController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $params = Yii::$app->request->queryParams;
        $params['NewsSearch']['type'] = News::TYPE_PARTNER;
        $dataProvider = $searchModel->search($params);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        $count = News::find()
            ->andWhere(['status' => News::STATUS_ACTIVE])
            ->andWhere(['type' => News::TYPE_PARTNER])
            ->count();

        if ($count == 3) {
            Yii::$app->session->setFlash('warning', Yii::t('app', 'Không được thêm quá 3 bài viết tìm kiếm đối tác sẽ bị vỡ giao diện'));
            return $this->redirect(['index']);
        }
        $model->setScenario('create');

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post())) {
            $image_display = UploadedFile::getInstance($model, 'image_display');
            $file = UploadedFile::getInstance($model, 'file');
            $icon = UploadedFile::getInstance($model, 'icon');
            if ($image_display) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $image_display->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@image_news') . '/';
                if ($image_display->saveAs($tmp . $file_name)) {
                    $model->image_display = $file_name;
                }
            }
            if ($file && $model->is_file) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $file->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@file') . '/';
                if ($file->saveAs($tmp . $file_name)) {
                    $model->file = $file_name;
                }
            }

            if ($icon && $model->icon) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $icon->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@image_news') . '/';
                if ($icon->saveAs($tmp . $file_name)) {
                    $model->icon = $file_name;
                }
            }
            $model->posted_id = Yii::$app->user->id;
            $model->type = News::TYPE_PARTNER;
            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', 'Created!');
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->getSession()->setFlash('error', 'Can not create');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_image_display = $model->image_display;
        $old_file = $model->file;
        $old_icon = $model->icon;
        if ($model->load(Yii::$app->request->post())) {
            $image_display = UploadedFile::getInstance($model, 'image_display');
            $file = UploadedFile::getInstance($model, 'file');
            $icon = UploadedFile::getInstance($model, 'icon');
            if ($image_display) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $image_display->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@image_news') . '/';
                if ($image_display->saveAs($tmp . $file_name)) {
                    if (file_exists($tmp . $old_image_display)) {
                        unlink($tmp . $old_image_display);
                    }
                    $model->image_display = $file_name;
                }
            } else {
                $model->image_display = $old_image_display;
            }
            if ($file && $model->is_file) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $file->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@file') . '/';
                if ($file->saveAs($tmp . $file_name)) {
                    if (file_exists($tmp . $old_file)) {
                        unlink($tmp . $old_file);
                    }
                    $model->file = $file_name;
                }
            } else {
                $model->file = $old_file;
            }
            if ($icon) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $icon->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@image_news') . '/';
                if ($icon->saveAs($tmp . $file_name)) {
                    $model->icon = $file_name;
                }
            } else {
                $model->icon = $old_icon;
            }
            $model->posted_id = Yii::$app->user->id;
            if ($model->status == News::STATUS_ACTIVE) {
                $count = News::find()
                    ->andWhere(['status' => News::STATUS_ACTIVE])
                    ->andWhere(['type' => News::TYPE_PARTNER])
                    ->count();

                if ($count == 3) {
                    Yii::$app->session->setFlash('warning', Yii::t('app', 'Không được thêm quá 3 bài viết tìm kiếm đối tác sẽ bị vỡ giao diện'));
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            }
            if ($model->update()) {
                Yii::$app->getSession()->setFlash('success', 'Updated');
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->getSession()->setFlash('error', 'Can not updated');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->getSession()->setFlash('success', 'Deleted!');
        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
