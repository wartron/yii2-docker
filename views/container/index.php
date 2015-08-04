<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

$this->title = 'Containers';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="docker-default-index">

    <div class="panel panel-default">
        <div class="panel-heading">Containers</div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php
                    echo GridView::widget([
                        'layout'        => '{summary}{pager}{items}{pager}',
                        'dataProvider'  => $dataProvider,
                         'columns'      => [
                            [
                                'attribute' =>  'id',
                                'format'    =>  'raw',
                                'value'     =>  function($m) {
                                    return Html::a($m['id'],['view','id'=>$m['id']]);
                                }
                            ],
                            [
                                'attribute' =>  'name',
                                'format'    =>  'raw',
                                'value'     =>  function($m) {
                                    return Html::a($m['name'],['view','id'=>$m['id']]);
                                }
                            ],
                            'image',
                            [
                                'attribute' =>  'created',
                                'format'    =>  'raw',
                                'value'     =>  function($m) {
                                    $relativeTime = \Yii::$app->formatter->asRelativeTime($m['created']);
                                    $formatedTime = \Yii::$app->formatter->asDatetime($m['created']);
                                    return '<span title="'.$formatedTime.'">'.$relativeTime.'</span>';
                                }
                            ],
                            'command',
                            'status',
                        ]
                    ]);
                ?>
            </div>
        </div>
    </div>


</div>
