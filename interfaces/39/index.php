<?php
/**
 * User interface
 * lesson - 39
 * http://code.mu/ru/php/book/oop/interfaces/constructor-declaring/ 
**/

require_once './iUser.php';
require_once './User.php';

$user = new User( 'Danil', 21 );

echo $user->getName();
echo '<br>';
echo $user->getAge();
