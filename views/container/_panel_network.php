<?php
use yii\grid\GridView;


if(isset($portsDP)){
    echo GridView::widget([
        'layout'        =>  '{items}',
        //'showHeader'    =>  false,
        'dataProvider'  =>  $portsDP,
        'tableOptions'=>[
            'class' =>  'table table-striped table-bordered',
            'style' =>  'margin-bottom: 0px'
        ],
        'columns'       =>  [
            'protocal',
            'localPort',
            'hostAddr',
            'hostPort',
        ]
    ]);
}

if(isset($linksDP)){
    echo GridView::widget([
        'layout'        =>  '{items}',
        //'showHeader'    =>  false,
        'dataProvider'  =>  $linksDP,
        'tableOptions'=>[
            'class' =>  'table table-striped table-bordered',
            'style' =>  'margin-bottom: 0px'
        ],
        'columns'       =>  [
            'local',
            'remote',
        ]
    ]);
}