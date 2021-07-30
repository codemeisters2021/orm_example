<?php

namespace App\Model;

use App\Model\Company;

class Developer extends Employee
{
    protected $language;

    /**
     * Employee constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $position
     * @param Company $company
     */
    public function __construct(string $firstName, string $lastName, string $position, Company $company, string $language)
    {
        parent::__construct($firstName, $lastName, $position, $company);
        $this->language = $language;
    }
}
