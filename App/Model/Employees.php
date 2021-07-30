<?php

namespace App\Model;

class Employees
{
    protected $firstName;
    protected $lastName;
    protected $position;
    protected $company;

    /**
     * Employees constructor.
     * @param $firstName
     * @param $lastName
     * @param $position
     */
    public function __construct($firstName, $lastName, $position)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
    }
}
