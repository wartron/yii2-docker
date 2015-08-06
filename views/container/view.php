<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;

$this->title = 'View';
$this->params['breadcrumbs'][] = ['label' => 'Containers', 'url' => ['/docker/container']];
$this->params['breadcrumbs'][] = $this->title;



?>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Container Config</div>
            <div class="panel-body" style="padding:0">
                <?php
                $createdTime = strtotime(substr($info['Created'],0,strpos($info['Created'], '.')));
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
                            'value'     =>  '<span title="'.\Yii::$app->formatter->asDatetime($createdTime).'">'.\Yii::$app->formatter->asRelativeTime($createdTime).'</span>'
                        ],

                    ],
                ]);

                ?>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Networking - Ports</div>
            <div class="panel-body" style="padding:0">
                <?php
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
                ?>

            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Enviroment Variables</div>
            <div class="panel-body" style="padding:0">
                <?php
                    echo GridView::widget([
                        'layout'        =>  '{items}',
                        'showHeader'    =>  false,
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
                ?>
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">Volumes</div>
            <div class="panel-body" style="padding:0">
                <?php

                    echo GridView::widget([
                        'layout'        =>  '{items}',
                        'showHeader'    =>  false,
                        'dataProvider'  =>  $volDP,
                        'tableOptions'=>[
                            'class' =>  'table table-striped table-bordered',
                            'style' =>  'margin-bottom: 0px'
                        ],
                        'columns'       =>  [
                            'rw',
                            'local',
                            'remote',
                        ]
                    ]);


                ?>
            </div>
        </div>

    </div>
</div>




<div class="row">
    <div class="col-md-12">
    <div class="panel panel-default panel-docker-container">
        <div class="panel-heading">Raw Dump</div>
        <div class="panel-body">
            <div class="table-responsive">
                <pre><?php print_r($config); ?></pre>
                <pre><?php print_r($info); ?></pre>
            </div>
        </div>
    </div>
    </div>
</div>
