<?php
namespace wartron\yii2docker\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class DefaultController extends BaseDockerController
{

    public function actionIndex()
    {
        return $this->render('index');
    }
}
