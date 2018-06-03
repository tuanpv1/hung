<?php

namespace backend\controllers;

use api\models\News;
use Yii;
use common\models\Category;
use common\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();
        
        if ($model->load(Yii::$app->request->post())) {
            $image_display = UploadedFile::getInstance($model, 'image');
            if($model->parent_id){
                $model_parent = Category::findOne($model->parent_id);
                if($model_parent->parent_id){
                    Yii::$app->getSession()->setFlash('error', 'The function limit, The website block menu multiple!');
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            }
            if ($image_display) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $image_display->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@image_news') . '/';
                if ($image_display->saveAs($tmp . $file_name)) {
                    $model->image = $file_name;
                }
            }
            if($model->save()) {
                Yii::$app->getSession()->setFlash('success', 'Created!');
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                Yii::$app->getSession()->setFlash('error', 'Cannot created');
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
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_image_display = $model->image;
        if ($model->load(Yii::$app->request->post())) {
            $image_display = UploadedFile::getInstance($model, 'image');
            if($model->parent_id){
                $model_parent = Category::findOne($model->parent_id);
                if($model_parent->parent_id){
                    Yii::$app->getSession()->setFlash('error', 'The function limit, The website block menu multiple!');
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            }
            if ($image_display) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $image_display->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@image_news') . '/';
                if ($image_display->saveAs($tmp . $file_name)) {
                    $model->image = $file_name;
                }
            }else{
                $model->image = $old_image_display;
            }
            if ($model->update(false)) {
                Yii::$app->getSession()->setFlash('success', 'Updated!');
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->getSession()->setFlash('error', 'Cannot updated');
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
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
    
        $model = Category::findOne($id);
        $model_child =Category::findOne(['parent_id'=>$id]);
        if($model_child){
            Yii::$app->getSession()->setFlash('error', 'Cannot deleted! The category have child');
            return $this->redirect(['index']);
        }
        $model_new = News::findOne(['category_id'=>$id]);
        if($model_new){
            Yii::$app->getSession()->setFlash('error', 'Cannot deleted! The category have new');
            return $this->redirect(['index']);
        }
        Yii::$app->getSession()->setFlash('success', 'Deleted!');
        return $this->redirect(['index']);
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
