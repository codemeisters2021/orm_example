<?php

namespace App\Model;

class Company
{
    protected $id;
    protected $name;

    /**
     * Company constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
