<?php

namespace backend\controllers;

use Yii;
use common\models\Contact;
use common\models\ContactSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ContactController implements the CRUD actions for Contact model.
 */
class ContactController extends Controller
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
     * Displays a single Contact model.
     * @param integer $id
     * @return mixed
     */
    public function actionView()
    {
        $model = Contact::find()->orderBy(['id'=>SORT_DESC])->one();
        if($model){
            return $this->render('view', [
                'model' => $model,
            ]);
        }else{
            return $this->redirect(['create']);
        }

    }

    /**
     * Creates a new Contact model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contact();

        if ($model->load(Yii::$app->request->post())) {
            $image_display = UploadedFile::getInstance($model, 'image');
            if ($image_display) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $image_display->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@image_contact') . '/';
                if ($image_display->saveAs($tmp . $file_name)) {
                    $model->image = $file_name;
                }
            }
            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', 'Created');
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->getSession()->setFlash('error', 'Cannot created');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Contact model.
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
            if ($image_display) {
                $file_name = Yii::$app->user->id . '.' . uniqid() . time() . '.' . $image_display->extension;
                $tmp = Yii::getAlias('@backend') . '/web/' . Yii::getAlias('@image_contact') . '/';
                if ($image_display->saveAs($tmp . $file_name)) {
//                    if (file_exists($tmp . $old_image_display)) {
//                        unlink($tmp . $old_image_display);
//                    }
                    $model->image = $file_name;
                }
            } else {
                $model->image = $old_image_display;
            }
            if ($model->update()) {
                Yii::$app->getSession()->setFlash('success', 'Updated!');
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->getSession()->setFlash('error', 'Cannot updated');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Contact model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Contact the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Contact::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
