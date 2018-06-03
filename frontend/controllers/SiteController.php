<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Contact;
use common\models\HomeSolution;
use common\models\Info;
use common\models\News;
use frontend\models\ContactForm;
use frontend\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {

        $listSolution = Category::find()
            ->andWhere(['status' => Category::STATUS_ACTIVE])
            ->andWhere(['is_display' => Category::STATUS_DISPLAY])
            ->limit(6)
            ->all();
        $info = Info::findOne(['id' => Info::ID]);
        return $this->render('index', [
            'listSolution' => $listSolution,
            'info' => $info,
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionDetail($id)
    {
        $new = News::findOne($id);
        return $this->render('detail-news', ['new' => $new]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $contact = Contact::find()->orderBy(['id'=>SORT_DESC])->one();
        $related_post = News::find()
            ->andWhere(['status' => Category::STATUS_ACTIVE])
            ->orderBy(['updated_at'=>SORT_DESC])
            ->limit(4)
            ->all();
        return $this->render('contact', [
            'contact' => $contact,
            'related_post' => $related_post,
        ]);
    }

    public function actionAbout()
    {
        $info = Info::findOne(['id' => Info::ID]);
        return $this->render('about', ['new' => $info]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionIndexNews($category_id)
    {
        $new = News::find()
            ->andWhere(['status' => News::STATUS_ACTIVE])
            ->andWhere(['category_id' => $category_id])
            ->orderBy(['id'=>SORT_DESC])
            ->one();
        if($new){
            return $this->redirect(['site/detail-news','id'=>$new->id]);
        }else{
            return $this->redirect(['site/index']);
        }
    }

    public function actionListCategory()
    {
        $listCats = Category::findAll(['status' => Category::STATUS_ACTIVE]);
        $listNews = News::find()->andWhere(['status' => Category::STATUS_ACTIVE]);
        $countQuery = clone $listNews;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pageSize = Yii::$app->params['page_size'];
        $pages->setPageSize($pageSize);
        $models = $listNews->offset($pages->offset)
            ->limit(10)->all();
        return $this->render('list-category', [
            'listCats' => $listCats,
            'listNews' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionDetailNews($id)
    {
        $new = News::findOne($id);
        if (!$new) {
            return $this->redirect(['site/index']);
        }
        $related_post = News::find()
            ->andWhere(['status' => Category::STATUS_ACTIVE])
            ->andWhere(['<>', 'category_id', $new->category_id])
            ->limit(4)
            ->all();
        return $this->render('detail-news', [
            'new' => $new,
            'related_post' => $related_post,
        ]);
    }

    public function actionDetailSolution($id)
    {
        $new = HomeSolution::findOne($id);
        if (!$new) {
            return $this->redirect(['site/index']);
        }
        $related_post = News::find()
            ->andWhere(['status' => Category::STATUS_ACTIVE])
            ->limit(4)
            ->all();
        return $this->render('detail-news', [
            'new' => $new,
            'related_post' => $related_post,
        ]);
    }


}
