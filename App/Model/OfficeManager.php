<?php

namespace App\Model;

use App\Model\Company;

class OfficeManager extends Employee
{
    protected $office;

    /**
     * Employee constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $position
     * @param Company $company
     */
    public function __construct(string $firstName, string $lastName, string $position, Company $company, string $office)
    {
        parent::__construct($firstName, $lastName, $position, $company);
        $this->office = $office;
    }
}
