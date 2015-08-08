<?php

use yii\grid\GridView;
use kartik\helpers\Html;

echo GridView::widget([
    'layout'        =>  '{items}',
    //'showHeader'    =>  false,
    'dataProvider'  =>  $volDP,
    'tableOptions'=>[
        'class' =>  'table table-striped table-bordered',
        'style' =>  'margin-bottom: 0px'
    ],
    'columns'       =>  [
        [
            'attribute' =>  'rw',
            'format' =>  'raw',
            'value' => function ($m) {
                if($m['rw']=='rw')
                    return Html::bsLabel('RW', Html::TYPE_SUCCESS);
                return Html::bsLabel('RO');
            }
        ],
        'local',
        'remote',
    ]
]);
