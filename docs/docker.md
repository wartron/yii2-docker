# Docker Workflow

The Yii2-Docker module will initilize the docker-php connection, you can get the Docker object directly with

    Yii::$app->getModule('docker')->Containers()

Optionally, you can retrieve the Container and Image Managers with

    Yii::$app->getModule('docker')->Containers()
    Yii::$app->getModule('docker')->Images()


Getting info on a running container.

    $idOrName   =   'tender_albattani';
    $container  =   Yii::$app->getModule('docker')->Containers()->find($idOrName);
    $config     =   $container->getConfig();
    $info       =   $container->getRuntimeInformations();