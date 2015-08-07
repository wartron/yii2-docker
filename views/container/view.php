<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;

$this->title = 'View';
$this->params['breadcrumbs'][] = ['label' => 'Containers', 'url' => ['/docker/container']];
$this->params['breadcrumbs'][] = $this->title;



?>
<div class="row">
    <div class="col-md-6">
    <?php
        echo Html::panel([
            'heading'   =>  'Container Config',
            'preBody'   =>  $this->render('_panel_config',[
                'info'  =>  $info,
            ]),
        ]);

        echo Html::panel([
            'heading'   =>  'Enviroment Variables',
            'preBody'   =>  $this->render('_panel_env',[
                'envDP' =>  $envDP,
            ]),
        ]);
    ?>
    </div>
    <div class="col-md-6">
    <?php
        echo Html::panel([
            'heading'   =>  'Networking - Ports',
            'preBody'   =>  $this->render('_panel_network',[
                'portsDP'   =>  $portsDP,
            ]),
        ]);

        echo Html::panel([
            'heading'   =>  'Networking - Links',
            'preBody'   =>  $this->render('_panel_network',[
                'linksDP'   =>  $linksDP,
            ]),
        ]);
    ?>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
    <?php
        echo Html::panel([
            'heading'   =>  'Volumes',
            'preBody'   =>  $this->render('_panel_volumes',[
                'volDP' =>  $volDP,
            ]),
        ]);
    ?>
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
