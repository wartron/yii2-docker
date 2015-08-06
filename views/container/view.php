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
        <div class="panel">
            <div class="panel-heading">Container Config</div>
            <div class="panel-body">
                <?php
                echo DetailView::widget([
                    'model' => $info,
                    'attributes' => [
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
                            'attribute' =>  'Config.ExposedPorts',
                            'label'  => 'Ports',
                            'type'  =>  'raw',
                            'value' => join(array_keys($info['Config']['ExposedPorts']),' ')
                        ],
                        'Created',
                    ],
                ]);

                ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">Enviroment Variables</div>
            <div class="panel-body">
                <?php
                    echo GridView::widget([
                        'layout'        =>  '{items}',
                        'showHeader'    =>  false,
                        'dataProvider'  =>  $envDP,
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

        <div class="panel">
            <div class="panel-heading">Volumes</div>
            <div class="panel-body">
                <?php

                    echo GridView::widget([
                        'layout'        =>  '{items}',
                        'showHeader'    =>  false,
                        'dataProvider'  =>  $volDP,
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
    <div class="panel panel-docker-container">
        <div class="panel-heading">Container View</div>
        <div class="panel-body">
            <div class="table-responsive">
                <pre><?php print_r($config); ?></pre>
                <pre><?php print_r($info); ?></pre>
            </div>
        </div>
    </div>
    </div>
</div>
