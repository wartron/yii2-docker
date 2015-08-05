<?php
namespace wartron\yii2docker\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

class ContainerController extends BaseDockerController
{

    public function actionIndex()
    {
        $all = \Yii::$app->getModule('docker')->ContainersFormated()

        $dataProvider = new ArrayDataProvider([
            'allModels' => $all,
            'sort' => [
                'attributes' => ['id', 'name', 'image', 'created', 'command'],
            ],
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index',[
            'dataProvider'  => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $container = \Yii::$app->getModule('docker')->Containers()->find($id);

        return $this->render('view',[
            'container'  => $container,
        ]);
    }
}
