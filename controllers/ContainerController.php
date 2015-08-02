<?php
namespace wartron\yii2docker\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

class ContainerController extends BaseDockerController
{


    public function actionIndex()
    {
        $all = $this->allFormatted();

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

    public function allFormatted()
    {
        $ret = [];

        $all = \Yii::$app->getModule('docker')->Containers()->findAll();
        foreach($all as $a){

            $d = $a->getData();

            $r = [
                'id'        =>  $a->getId(),
                'name'      =>  $a->getName(),
                'image'     =>  $a->getImage()->__toString(),//$d['Image']
                'command'   =>  $d['Command'],
                'created'   =>  $d['Created'],
                'status'    =>  $d['Status'],
                //'data'      => $d,
            ];

            $ret[] = $r;
        }

        return $ret;
    }



    public function actionView($id)
    {
        $container = \Yii::$app->getModule('docker')->Containers()->find($id);

        return $this->render('view',[
            'container'  => $container,
        ]);
    }
}
