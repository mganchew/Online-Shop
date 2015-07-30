<?php
/**
 * Created by PhpStorm.
 * User: mladen
 * Date: 15-7-29
 * Time: 10:49
 */

namespace app\model;


class MyMailer extends Model{

    protected $id;
    protected $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}