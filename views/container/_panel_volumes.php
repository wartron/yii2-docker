<?php

use yii\grid\GridView;

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
                    return '<span class="label label-success">RW</span>';
                return '<span class="label label-default">RO</span>';
            }
        ],
        'local',
        'remote',
    ]
]);
