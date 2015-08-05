<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

$this->title = 'View';
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['/docker/image']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="docker-image-index">

    <div class="panel panel-docker-image">
        <div class="panel-heading">Image View</div>
        <div class="panel-body">
            <div class="table-responsive">
                <pre><?php print_r($image); ?></pre>
            </div>
        </div>
    </div>


</div>
