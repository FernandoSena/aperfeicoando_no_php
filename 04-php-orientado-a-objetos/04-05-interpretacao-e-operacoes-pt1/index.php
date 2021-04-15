<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

$user = new \Source\Interpretatition\User(
    "Fernando",
    "Sena",
    "fernandocarvalho.sena@gmail.com"
);
var_dump($user);

/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

$robson = $user;

$kaue = $robson;
$kaue->setFirstName("Kaue");
$kaue->setLastname("Cardoso");
$kaue->setEmail("upside@gmail.com");


$robson->setFirstName("Robson");
$robson->setLastname("Leite");


$kaue = clone $robson;
$kaue->setFirstName("Kaue");
$kaue->setLastname("Cardoso");

$gustavo = clone $robson;
$kaue = null;

var_dump(
    $robson,
    $kaue,
    $gustavo
);

/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);