<?php

use App\Model\Company;
use App\Model\Employee;
use Doctrine\ORM\EntityManager;

require_once 'bootstrap.php';

/**
 * @var EntityManager $entityManager
 */
$employeeRepository = $entityManager->getRepository(Employee::class);

$newPosition = new Company();
