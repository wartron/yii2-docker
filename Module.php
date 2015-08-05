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
    const VERSION = '0.0.2-dev';

    /** @var int Number of Contianers per page, used for ArrayDataProvider in ContianerController. */
    public $containerPageSize = 20;

    /** @var int Number of Images per page, used for ArrayDataProvider in ImageController. */
    public $imagePageSize = 20;


    private $_docker;

    /**
     * Initializes and returns the docker object
     * @return Docker
     */
    public function getDocker()
    {
        if($this->_docker)
            return $this->_docker;

        $this->_docker = new Docker();

        return $this->_docker;
    }

    /**
     * Returns the docker container mananger
     * @return ContainerManager
     */
    public function Containers()
    {
        return $this->getDocker()->getContainerManager();
    }

    /**
     * Returns the docker image mananger
     * @return ImageManager
     */
    public function Images()
    {
        return $this->getDocker()->getImageManager();
    }

    /**
     * Returns the number of running containers
     * @return int
     */
    public function getCountRunning()
    {
        return count($this->Containers()->findAll());
    }

    /**
     * Returns the number of images
     * @return int
     */
    public function getCountImages()
    {
        return count($this->Images()->findAll());
    }


    /**
     * Returns the containers info as a flat array for gridviews
     * @return array
     */
    public function ContainersFormated()
    {
        $ret = [];

        $all = $this->Containers()->findAll();

        foreach($all as $a)
        {

            $d = $a->getData();

            $r = [
                'id'        =>  $a->getId(),
                'name'      =>  $a->getName(),
                'image'     =>  $a->getImage()->__toString(),//$d['Image']
                'command'   =>  $d['Command'],
                'created'   =>  $d['Created'],
                'status'    =>  $d['Status'],
                //'data'      => $d,
            ];

            $ret[] = $r;
        }

        return $ret;
    }


    /**
     * Returns the image info as a flat array for gridviews
     * @return array
     */
    public function ImagesFormated($dangling = false, $all = false)
    {
        $ret = [];

        $imgs = $this->Images()->findAll($dangling,$all);
        foreach($imgs as $i){
            $ret[] = [
                'id'            =>  $i->getId(),
                'repository'    =>  $i->getRepository(),
                'tag'           =>  $i->getTag(),
            ];
        }

        return $ret;
    }

}
