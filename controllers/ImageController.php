<?php
namespace wartron\yii2docker\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

class ImageController extends BaseDockerController
{

    public function actionIndex()
    {
        $all = \Yii::$app->getModule('docker')->ImagesFormated();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $all,
            'sort' => [
                'attributes' => ['id', 'repository', 'tag'],
            ],
            'pagination' => [
                'pageSize' => \Yii::$app->getModule('docker')->imagePageSize,
            ],
        ]);

        return $this->render('index',[
            'dataProvider'  => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $image = \Yii::$app->getModule('docker')->Images()->findById($id);

        return $this->render('view',[
            'image'  => $image,
        ]);
    }
}
