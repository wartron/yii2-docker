<?php

use yii\grid\GridView;


echo GridView::widget([
    'layout'        =>  '{items}',
    //'showHeader'    =>  false,
    'dataProvider'  =>  $envDP,
    'tableOptions'=>[
        'class' =>  'table table-striped table-bordered',
        'style' =>  'margin-bottom: 0px'
    ],
    'columns'       =>  [
        'var',
        'value',
    ]
]);

