<?php


/**
 * lesson - 28
 * Контроль типов при работе с объектами
 * task link - http://code.mu/ru/php/book/oop/types-control/
 **/ 

require_once './Post.php';
require_once './Employee.php';

$programmer = new Post( 'programmer', '1000$' );
$manager = new Post( 'manager', '700$' );
$driver = new Post( 'driver', '500$' );

$employee = new Employee( 'Danil', 'Derevyanchenko', $programmer );

echo "Employee name: {$employee->getName()} <br> ";
echo "Employee surname: {$employee->getSurname()} <br> ";
echo "Employee post name: {$employee->post->getPostName()} <br> ";
echo "Employee salary: {$employee->post->getSalary()} <br> ";
echo '<br>';

// change post from programmer to manager
$employee->changePost( $manager );

echo "Employee name: {$employee->getName()} <br> ";
echo "Employee surname: {$employee->getSurname()} <br> ";
echo "Employee post name: {$employee->post->getPostName()} <br> ";
echo "Employee salary: {$employee->post->getSalary()} <br> ";