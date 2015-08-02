<?php



?>
<div class="row">
<?php

echo \Yii::$app->getModule('docker')->getCountRunning() . " Running <BR><BR>";

    // echo \app\widgets\Smallbox::widget([
    //     'h3'            => \Yii::$app->getModule('docker')->getCountRunning(),
    //     'message'       => 'Running Containers',
    //     'bg'            => 'aqua',
    //     'icon'          => 'android-boat',
    //     'title'         => 'Containers',
    //     'url'           => ['/docker/container'],
    // ]);


    // echo \app\widgets\Smallbox::widget([
    //     'h3'            => \Yii::$app->getModule('docker')->getCountImages(),
    //     'message'       => 'Images',
    //     'bg'            => 'gray',
    //     'icon'          => 'ios-albums-outline',
    //     'title'         => 'Images',
    //     'url'           => ['/docker/image'],
    // ]);


?>

</div>

