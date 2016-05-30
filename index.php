<?php 


// Include the person class
require 'person.php';

$hyojin = new person('Hyojin Jung', 5);
$sam = new person('Sam Gamgee', 10);


$hyojin->introduceSelf();
$sam->introduceSelf();

$hyojin->sayBirthday();