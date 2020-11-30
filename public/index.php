<?php

// require __DIR__. '/../vendor/autoload.php';
// use App\Wcs\Hello;
// $hello = new Hello();
// echo $hello->talk();

require __DIR__. '/../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';
use HelloWorld\SayHello;
$sayHello = new SayHello();
echo $sayHello->world()

?>