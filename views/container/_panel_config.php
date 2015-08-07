<?php
use yii\widgets\DetailView;

$createdTime = strtotime(substr($info['Created'],0,strpos($info['Created'], '.')));

$timeValue = '<span title="'.\Yii::$app->formatter->asDatetime($createdTime).'">'.
                \Yii::$app->formatter->asRelativeTime($createdTime).'</span>';

echo DetailView::widget([
    'model' => $info,
    'options'=>[
        'class' =>  'table table-striped table-bordered detail-view',
        'style' =>  'margin-bottom: 0px'
    ],
    'attributes' => [
        [
            'attribute' =>  'Name',
            'label'  => 'Name',
        ],
        [
            'attribute' =>  'Config.Image',
            'label'  => 'Image',
        ],
        [
            'attribute' =>  'Config.Cmd',
            'label'  => 'Command',
            'type'  =>  'raw',
            'value' => join($info['Config']['Cmd'],' ')
        ],
        [
            'attribute' =>  'Config.Hostname',
            'label'  => 'Hostname',
        ],
        [
            'attribute' =>  'Created',
            'format'    =>  'raw',
            'value'     =>  $timeValue
        ],

    ],
]);
