<?php

require_once __DIR__.'/../vendor/autoload.php';

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = 'Teodoro';
$user->last_name = 'Cavalcante';
$user->genre = 'M';
$user->save();

$addr = new Address();
$addr->add($user,"Rua Josiene Mariano","799");
$addr->save();

var_dump($user);
var_dump($addr);