<?php

namespace backend\controllers;

use Yii;
use common\models\Lichgiangday;
use common\models\searchs\LichgiangdaySearch;
use yii\bootstrap\Html;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LichgiangdayController implements the CRUD actions for Lichgiangday model.
 */
class LichgiangdayController extends Controller
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
                        'actions' => ['logout', 'index', 'download', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                    [
                        'actions' => ['create', 'update', 'delete'],
                        'allow' => true,
                        'matchCallback' => function($rule, $action){
                            if (in_array(Yii::$app->user->identity->role, ['admin', 'trưởng bộ môn']))
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
     * Lists all Lichgiangday models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LichgiangdaySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if (in_array(Yii::$app->user->identity->role, ['admin', 'trưởng bộ môn']))
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
     * Displays a single Lichgiangday model.
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
     * Creates a new Lichgiangday model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lichgiangday();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Lichgiangday model.
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
     * Deletes an existing Lichgiangday model.
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
     * Finds the Lichgiangday model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lichgiangday the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lichgiangday::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionXoafile($id){
        $tailieu = Lichgiangday::findOne($id);
        $file = dirname(dirname(__DIR__)).'/files/'.$tailieu->filedinhkem;
        if(is_file($file))
            unlink($file);
        $tailieu->updateAttributes(['filedinhkem'=>'nofile.jpg']);
        $this->redirect(Url::toRoute(['lichgiangday/update','id'=>$id]));
    }

    public function actionDownload($id){
        $model = $this->findModel($id);
        $uploadpath = dirname(dirname(__DIR__)).'/files/'.$model->filedinhkem;
        if (file_exists($uploadpath)){
            Yii::$app->response->sendFile($uploadpath);
        }
        else{
            return $this->redirect('download404');
        }
    }
}
