<?php

namespace wartron\yii2docker;

use yii\base\Module as BaseModule;
use Docker\Docker;
use Docker\Container;


/**
 * Class Module
 */
class Module extends BaseModule
{
    private $_docker;

    public function getDocker()
    {
        if($this->_docker)
            return $this->_docker;

        $this->_docker = new Docker();

        return $this->_docker;
    }

    public function Containers()
    {
        return $this->getDocker()->getContainerManager();
    }

    public function Images()
    {
        return $this->getDocker()->getImageManager();
    }

    public function getCountRunning()
    {
        return count($this->Containers()->findAll());
    }

    public function getCountImages()
    {
        return count($this->Images()->findAll());
    }

}
