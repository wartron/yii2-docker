<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

$this->title = 'Images';
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['/docker/image']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="docker-image-index">

    <div class="panel panel-docker-image">
        <div class="panel-heading">Images</div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php
                    echo GridView::widget([
                        'layout' => '{summary}{pager}{items}{pager}',
                        'dataProvider' => $dataProvider,
                         'columns' => [
                            [
                                'attribute' =>  'id',
                                'format'    =>  'raw',
                                'value'     =>  function($m) {
                                    return Html::a($m['id'],['view','id'=>$m['id']]);
                                }
                            ],
                            'repository',
                            'tag',
                        ]
                    ]);
                ?>
            </div>
        </div>
    </div>


</div>
