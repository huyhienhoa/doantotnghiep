<?php

namespace backend\controllers;

use Yii;
use common\models\Congtacnghiencuukh;
use common\models\searchs\CongtacnghiencuukhSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * CongtacnghiencuukhController implements the CRUD actions for Congtacnghiencuukh model.
 */
class CongtacnghiencuukhController extends Controller
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
     * Lists all Congtacnghiencuukh models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CongtacnghiencuukhSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Congtacnghiencuukh model.
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
     * Creates a new Congtacnghiencuukh model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Congtacnghiencuukh();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Congtacnghiencuukh model.
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
     * Deletes an existing Congtacnghiencuukh model.
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
     * Finds the Congtacnghiencuukh model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Congtacnghiencuukh the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Congtacnghiencuukh::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionXoafile($id){
        $tailieu = Congtacnghiencuukh::findOne($id);
        $file = dirname(dirname(__DIR__)).'/files/'.$tailieu->filedinhkem;
        if(is_file($file))
            unlink($file);
        $tailieu->updateAttributes(['filedinhkem'=>'nofile.jpg']);
        $this->redirect(Url::toRoute(['congtacnghiencuukh/update','id'=>$id]));
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
