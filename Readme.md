# Yii2-Docker

This provides a simple Yii2 Module to view and interact with the Docker Remote API.
It includes simple grid views for both containers and images.



## Installation

Add to the modules in config/main.php

If you are using the advanced template you want to add this to backend/config/main.php

    'modules'    => [
        'docker'  => [
            'class'         => 'wartron\yii2docker\Module',
            'layout'        => '@admin-views/layouts/main',
        ],
    ],


Override the views by updating the pathMap

    'view'         => [
        'theme' => [
            'pathMap' => [
                '@vendor/wartron/yii2docker/views' => '@app/views/docker',
            ],
        ],
    ],



## Configuration

This uses my fork of stage1/docker-php found @ [wartron/docker-php](https://github.com/wartron/docker-php) which is configued with ENV variables.

 * `DOCKER_HOST` - defaults to unix:///var/run/docker.sock
 * `DOCKER_TLS_VERIFY` - defaults to 0
 * `DOCKER_CERT_PATH` -