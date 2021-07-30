<?php

use App\Model\Company;
use App\Model\Employee;
use App\Model\WriteEmployees;
use Doctrine\ORM\EntityManager;

require_once 'bootstrap.php';

/**
 * @var EntityManager $entityManager
 */
$employeeRepository = $entityManager->getRepository(Employee::class);
$queryBuilder = $employeeRepository->createQueryBuilder('e');
$queryBuilder->select('id');
$queryBuilder->getQuery()->getResult();
$newCompany = new Company('name');
$entityManager->persist($newCompany);

$employee = new WriteEmployees('P', 'N', 'position', $newCompany);
$employee->setPosition('paa');
$entityManager->persist($employee);

$entityManager->flush();
