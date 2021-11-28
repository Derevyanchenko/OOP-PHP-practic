<?php
/**
 * User interface
 * lesson - 39
 * http://code.mu/ru/php/book/oop/interfaces/constructor-declaring/ 
**/

require_once './iUser.php';
require_once './iEmployee.php';
require_once './Employee.php';

$employee = new Employee();

// set data
$employee->setName( 'Danil' );
$employee->setAge( 21 );
$employee->setSalary( '1000$' );

// get data
echo $employee->getName() . '<br>';
echo $employee->getAge() . '<br>';
echo $employee->getSalary() . '<br>';
