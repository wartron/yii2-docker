<?php

namespace wartron\yii2docker\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class BaseDockerController extends Controller
{
    /**
     * Behaviors, eg. access control
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions'       => ['index', 'view'],
                        'allow'         => true,
                        'roles'         => ['@']
                    ],
                ]
            ]
        ];
    }

    /**
     * Actions defined in classes, eg. error page
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function beforeAction($action)
    {
        \Yii::$app->view->params['breadcrumbs'][] = ['label' => 'Docker', 'url' => ['/docker']];
        return parent::beforeAction($action);
    }
}
