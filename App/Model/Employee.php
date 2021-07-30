<?php

namespace App\Model;

use App\Model\Company;

abstract class Employee
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $position;
    protected $company;

    /**
     * Employee constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $position
     * @param Company $company
     */
    public function __construct(string $firstName, string $lastName, string $position, Company $company)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->company = $company;
    }
}
