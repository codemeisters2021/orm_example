<?php

namespace App\Model;

class Position
{
    private $id;
    private $name;

    /**
     * Position constructor.
     * @param $name
     */
    public function __construct(string $name = null)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
