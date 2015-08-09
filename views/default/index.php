<?php

    echo \Yii::$app->getModule('docker')->getCountRunning() . " Running <BR><BR>";
    echo \Yii::$app->getModule('docker')->getCountImages() . " Images <BR><BR>";


/*
<div class="row">
    <div class="col-md-3 col-xs-6">
        <?php

            echo \insolita\wgadminlte\SmallBox::widget([
                'type'      =>  \insolita\wgadminlte\SmallBox::TYPE_PURPLE,
                'head'      =>  \Yii::$app->getModule('docker')->getCountRunning(),
                'text'      =>  'Running Containers',
                'icon'      =>  'ion ion-android-boat',
                'footer'    =>  'Containers <i class="fa fa-arrow-circle-right"></i>',
                'footer_link'   =>  ['/docker/container']
            ]);
        ?>
    </div>
    <div class="col-md-3 col-xs-6">
        <?php
            echo \insolita\wgadminlte\SmallBox::widget([
                'type'      =>  \insolita\wgadminlte\SmallBox::TYPE_GRAY,
                'head'      =>  \Yii::$app->getModule('docker')->getCountImages(),
                'text'      =>  'Images',
                'icon'      =>  'ion ion-ios-albums-outline',
                'footer'    =>  'Images <i class="fa fa-arrow-circle-right"></i>',
                'footer_link'   =>  ['/docker/image']
            ]);
        ?>
    </div>
</div>


(/)





