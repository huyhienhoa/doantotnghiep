<?php

namespace backend\controllers;

use Yii;
use common\models\Bomon;
use common\models\searchs\BomonSearch;
use yii\bootstrap\Html;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BomonController implements the CRUD actions for Bomon model.
 */
class BomonController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'download', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                    [
                        'actions' => ['create', 'update', 'delete', 'index'],
                        'allow' => true,
                        'matchCallback' => function($rule, $action){
                            if (in_array(Yii::$app->user->identity->role, ['trưởng khoa']))
                                return true;
                            return false;
                        }
                    ],
                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Bomon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BomonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if (in_array(Yii::$app->user->identity->role, ['trưởng khoa']))
            $btn_them =  Html::a('<span class="glyphicon glyphicon-plus"></span> Thêm mới', ['create'], ['class' => 'btn btn-success']);
        else
            $btn_them = '';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'btn_them' => $btn_them
        ]);
    }

    /**
     * Displays a single Bomon model.
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
     * Creates a new Bomon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bomon();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bomon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bomon model.
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
     * Finds the Bomon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bomon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bomon::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
