<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

$this->title = 'View';
$this->params['breadcrumbs'][] = ['label' => 'Containers', 'url' => ['/docker/container']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="docker-container-index">

    <div class="panel panel-docker-container">
        <div class="panel-heading">Container View</div>
        <div class="panel-body">
            <div class="table-responsive">
                <pre><?php print_r($container->getConfig()); ?></pre>
                <pre><?php print_r($container->getRuntimeInformations()); ?></pre>
            </div>
        </div>
    </div>


</div>
