<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/classes/App/Template.php";
require __DIR__."/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump(
    $appTemplate,
    $webTemplate
);

use App\Template;
use Web\Template as WebTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

var_dump(
    $appUseTemplate,
    $webUseTemplate
);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__."/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();
//$user->firstName = "Fernando";
//$user->lastName = "Sena";

//$user->setFirstName("Fernando");
//$user->setLastName("Sena");

$fernando = $user->setUser(
    "Fernando",
    "Sena",
    "cursos@gmail.com"
);
if(!$fernando){
    echo "<p class='trigger error'>{$user->getErro()}</p>";
}

$kaue = new \Source\Qualifield\User();
$kaue->setUser(
    "Kaue",
    "Oliveira",
    "cursos@gmail.com"
);

$marta = new \Source\Qualifield\User();
$marta->setUser(
    "Marta",
    "Leite",
    "cursos@gmail.com"
);
var_dump(
    $user,
    get_class_methods($user)
);
var_dump(
    $fernando,
    $kaue,
    $marta
);

echo "<p>O e-mail de {$user->getFirstName()} é {$user->getEmail()}!</p>";
/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);
