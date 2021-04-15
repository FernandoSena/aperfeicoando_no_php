<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new \Source\Inheritance\Event\Events(
    "Workshop FSPHP",
    new DateTime("2021-04-16 16:00"),
    2500,
    "2"
);

var_dump($event);

$event->register("Fernando", "fer@gmail.com");
$event->register("Felipe", "fer@gmail.com");
$event->register("Edina", "fer@gmail.com");
/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);
$address = new \Source\Inheritance\Address(
    "Rua eventos",
    "1287"
);

$event = new \Source\Inheritance\Event\EventLive(
    "Workshop FSPHP",
    new DateTime("2021-04-16 16:00"),
    2500,
    "2",
    $address
);

var_dump($event);

$event->register("Fernando", "fer@gmail.com");
$event->register("Felipe", "fer@gmail.com");
$event->register("Edina", "fer@gmail.com");

/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new \Source\Inheritance\Event\EventOnline(
    "Workshop FSPHP",
    new DateTime("2021-04-16 16:00"),
    197,
    "http://teste.com.br"
);
var_dump($event);
$event->register("Fernando", "fer@gmail.com");
$event->register("Felipe", "fer@gmail.com");
$event->register("Edina", "fer@gmail.com");