<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.12 - Comportamentos com traits");

require __DIR__ . "/source/autoload.php";

/*
 * [ trait ] São traços de código que podem ser reutilizados por mais de uma classe. Um trait é como um compoetamento
 * do objeto (BEHAVES LIKE). http://php.net/manual/pt_BR/language.oop5.traits.php
 */
fullStackPHPClassSession("trait", __LINE__);

$user  = new \Source\Traits\User(
    "Fernando",
    "Sena",
    "fernandocarvalho.sena@gmail.com"
);
$address = new \Source\Traits\Address(
    "Rua teste",
    125,
    "Casa 10"
);
$register = new \Source\Traits\Register(
    $user,
    $address
);

var_dump(
    $register,
    $register->getUser(),
    $register->getAddress(),
    $register->getUser()->getFirstName(),
    $register->getAddress()->getStreet()
);

$cart = new \Source\Traits\Cart();
$cart->add(1, "FSPHP", 1, 1500);
$cart->add(1, "HTML", 2, 1000);
$cart->remove(1, 1);


$cart->checkout(
    $user,
    $address
);
var_dump($cart);