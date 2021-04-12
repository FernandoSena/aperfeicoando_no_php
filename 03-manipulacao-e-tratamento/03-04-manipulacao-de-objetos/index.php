<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name"=>"Fernando",
    "company"=>"Softhubo",
    "mail"=>"fernandocarvalho.sena@gmail.com",
];

$objProfile = (object) $arrProfile;
//var_dump($arrProfile, $objProfile);

echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);//Elima methodo o objeto
var_dump($ceo);

$company = new StdClass();
$company->company = "Softhubo";
$company->ceo = $ceo;
$company->menager = new StdClass();
$company->menager->name = "Kaue";
$company->menager->mail = "kaue@gmail.com";

var_dump($company);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();
var_dump([
    "class"=>get_class($date),
    "methods"=>get_class_methods($date),
    "vars"=>get_object_vars($date),
    "parent"=>get_parent_class($date),
    "subclass"=>is_subclass_of($date, "DataeTime")
]);

$exception = new PDOException();
var_dump([
    "class"=>get_class($exception),
    "methods"=>get_class_methods($exception),
    "vars"=>get_object_vars($exception),
    "parent"=>get_parent_class($exception),
    "subclass"=>is_subclass_of($exception, "Exception")
]);