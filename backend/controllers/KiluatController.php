<?php

namespace backend\controllers;

use Yii;
use common\models\Kiluat;
use common\models\searchs\KiluatSearch;
use yii\bootstrap\Html;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * KiluatController implements the CRUD actions for Kiluat model.
 */
class KiluatController extends Controller
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
                        'actions' => Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id),
                        'allow' => (!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id)))?true:false,
                        'roles' => ['@'],
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
     * Lists all Kiluat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KiluatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if (in_array(Yii::$app->user->identity->role, [!empty(Yii::$app->user->identity->getDanhsachquyen(Yii::$app->controller->id))]))
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
     * Displays a single Kiluat model.
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
     * Creates a new Kiluat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kiluat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kiluat model.
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
     * Deletes an existing Kiluat model.
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
     * Finds the Kiluat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kiluat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kiluat::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionXoafile($id){
        $tailieu = Kiluat::findOne($id);
        $file = dirname(dirname(__DIR__)).'/files/'.$tailieu->filedinhkem;
        if(is_file($file))
            unlink($file);
        $tailieu->updateAttributes(['filedinhkem'=>'nofile.jpg']);
        $this->redirect(Url::toRoute(['kiluat/update','id'=>$id]));
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
