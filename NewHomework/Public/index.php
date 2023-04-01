<?php
require_once  __DIR__ . '/../../vendor/autoload.php';

use NewHomework\App\Classes\User;
use NewHomework\App\Classes\Joke;
use NewHomework\App\Classes\abstractAbs;
use NewHomework\App\Classes\Interfaces\Hello_world;
use NewHomework\App\Classes\MyClass;
use NewHomework\App\Classes\TraitUser;

//main
$main = new MyClass();
echo $main::MY_CONST;
echo "<br>";
//user
$apple = new User();
$banana = new User();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo $apple->get_name();
echo $banana->get_name();
echo "<br>";
//TraitUser
$o = new TraitUser();
$o->sayHello();
echo "<br>";

$u = new TraitUser();
$u->msgHome();
echo "<br>";

$ou = new TraitUser();
$ou->msgPipi();
echo "<br>";

//joke
$obj = new Joke();
$obj->ha_joke();
echo "<br>";

//abstractAbs
$webDumper = new AbstractAbs();
$webDumper->greetingYou('Поки я робила дз, я встигла 10 разів втомитися!');
echo "<br>";

//Interfaces
$cool_for_school = new Hello_world();
$cool_for_school->makeSound();
?>