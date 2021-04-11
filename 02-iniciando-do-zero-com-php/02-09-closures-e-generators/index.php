<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

//Usado para não repetir codigos simples que não precisa ser uma função

$myAge = function ($year){
    $age = date("Y")-$year;
    return "<p>Você tem {$age} anos!</p>";
};
echo $myAge(1196);
echo $myAge(1997);
echo $myAge(2006);

$priceBrl = function($price){
    return number_format($price, 2, ',', '.');
};

echo "<p>O projeto custa {$priceBrl(1800)}. vamos fechar?</p>";


$myCart = [];
$myCart["totalprice"] = 0;
$cardAdd = function ($item, $atd, $price) use (&$myCart){
    $myCart[$item] = $atd*$price;
    $myCart["totalprice"] += $myCart[$item];
};

$cardAdd("a", 1, 202);
$cardAdd("b", 2, 202);

var_dump($myCart, $cardAdd);
/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

//Receber muito dados sem utilizar muito recurso de memoria

$iteration = 400000;
function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++){
        $saveDate[] = date("d/m/Y", strtotime("+{$day} days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates(0) as $date) {
    echo "<small class='tag'>{$date}</small>";
}
echo "</div>";


//com generation
function generator($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++){
        yield date("d/m/Y", strtotime("+{$day} days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generator($iteration) as $date) {
    echo "<small class='tag'>{$date}</small>";
}
echo "</div>";