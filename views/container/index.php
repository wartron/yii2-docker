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
                        'layout' => '{summary}{pager}{items}{pager}',
                        'dataProvider' => $dataProvider,
                         'columns' => [
                            app\grid\ColumnPreset::linkId('container',12),
                            app\grid\ColumnPreset::linkName('container'),
                            'image',
                            app\grid\ColumnPreset::ago('created'),
                            'command',
                            'status',
                        ]
                    ]);
                ?>
            </div>
        </div>
    </div>


</div>
