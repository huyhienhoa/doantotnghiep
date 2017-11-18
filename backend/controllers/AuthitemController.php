<?php

namespace backend\controllers;

use Yii;
use common\models\Authitem;
use common\models\Roles;
use common\models\searchs\AuthitemSearch;
use common\models\searchs\DanhsachvaitroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * AuthitemController implements the CRUD actions for Authitem model.
 */
class AuthitemController extends Controller
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
     * Lists all Authitem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DanhsachvaitroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Authitem model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($idkhoa,$idvaitro)
    {
        if ($idkhoa!='' && $idvaitro!='')
            $danhsachquyen = Authitem::findAll(['roles_id'=>$idvaitro,'khoa_id'=>$idkhoa]);
        else
            $danhsachquyen = Authitem::find()->where(['roles_id'=>$idvaitro])->andWhere('khoa_id is null')->all();
        $model = new Authitem();
        $model->khoa_id = $idkhoa;
        $model->roles_id = $idvaitro;
        $model->auth_id = $model->getQuyen($danhsachquyen);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Authitem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Authitem();
        $model->auth_id = [];
        $errors = [];
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $vaitro = Roles::findOne($model->roles_id);
            if (empty($model->auth_id))
                $errors[] = 'Chưa có quyền được chọn';
            if ($vaitro->name !='Administrator' && $model->khoa_id == '')
                $errors[] = 'Vai trò này phải chọn khoa';
            if (empty($errors))
            {
                if ($model->khoa_id!='' && $model->roles_id!='')
                    Authitem::deleteAll(['roles_id'=>$model->roles_id,'khoa_id'=>$model->khoa_id]);
                else
                {
                    $quyens = Authitem::find()->where(['roles_id'=>$model->roles_id])->andWhere('khoa_id is null')->all();
                    foreach($quyens as $quyen)
                    {
                        $quyen->delete();
                    }
                }
                foreach($model->auth_id as $quyen)
                {
                    $phanquyen = new Authitem();
                    $phanquyen->roles_id = $model->roles_id;
                    $phanquyen->khoa_id = $model->khoa_id;
                    $phanquyen->auth_id = $quyen;
                    $phanquyen->save();
                }
                return $this->redirect(['index']);
            }else
            {
                Yii::$app->session->setFlash('danger', $errors);
            }
           
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Authitem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($idkhoa,$idvaitro)
    {
        if ($idkhoa!='' && $idvaitro!='')
            $danhsachquyen = Authitem::findAll(['roles_id'=>$idvaitro,'khoa_id'=>$idkhoa]);
        else
            $danhsachquyen = Authitem::find()->where(['roles_id'=>$idvaitro])->andWhere('khoa_id is null')->all();
        $model = new Authitem();
        $model->khoa_id = $idkhoa;
        $model->roles_id = $idvaitro;
        $model->auth_id = $model->getQuyen($danhsachquyen);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           $vaitro = Roles::findOne($model->roles_id);
            if (empty($model->auth_id))
                $errors[] = 'Chưa có quyền được chọn';
            if ($vaitro->name !='Administrator' && $model->khoa_id == '')
                $errors[] = 'Vai trò này phải chọn khoa';
            if (empty($errors))
            {
                if ($idkhoa!='' && $idvaitro!='')
                    Authitem::deleteAll(['roles_id'=>$model->roles_id,'khoa_id'=>$model->khoa_id]);
                else
                {
                    $quyens = Authitem::find()->where(['roles_id'=>$model->roles_id])->andWhere('khoa_id is null')->all();
                    foreach($quyens as $quyen)
                    {
                        $quyen->delete();
                    }
                }
                foreach($model->auth_id as $quyen)
                {
                    $phanquyen = new Authitem();
                    $phanquyen->roles_id = $model->roles_id;
                    $phanquyen->khoa_id = $model->khoa_id;
                    $phanquyen->auth_id = $quyen;
                    $phanquyen->save();
                }
                return $this->redirect(['index']);
            }else
            {
                Yii::$app->session->setFlash('danger', $errors);
            }
            
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Authitem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($idkhoa,$idvaitro)
    {
        Authitem::deleteAll(['roles_id'=>$idkhoa,'khoa_id'=>$idvaitro]);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Authitem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Authitem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Authitem::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
