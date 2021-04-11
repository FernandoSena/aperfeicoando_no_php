<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
require __DIR__."/functions.php";
var_dump(functionName("Pearl jump", "AC/DC", "Alter Bridge"));
var_dump(functionName("FernandoSena", "Felipe Sena", "Jefferson Sena"));

var_dump(optionArgs("Fernando Sena"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$width = 50;
$height = 1.80;
echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(100);
$pay = payTotal(50);
echo $pay;


/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Fernando","Felipe", "Jefferson", "Milton", "Edina"));
