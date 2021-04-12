<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump([
    date_default_timezone_get(),//Timezone configurado no servido
    date(DATE_W3C),
    date("d/m/Y H:i:s")
]);

define("DATE_BR","d/m/Y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);

var_dump([
    date_default_timezone_get(),
    date(DATE_BR)
]);

var_dump([
    getdate(), //Traz informações de datalhadas da data separa pelo array
]);

echo "<p>Hoje é dia ",getdate()["mday"],"!</p>";
/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump([
    "strtotime"=>strtotime("now"),
    "time"=>time(),
    "strtotime +10d"=>date(DATE_BR, strtotime("+10days")),
    "strtotime -10d"=>date(DATE_BR, strtotime("-10days")),
    "strtotime +1Y"=>date(DATE_BR, strtotime("+1year")),
]);

$format = "%d/%m/%Y %Hh%M";
echo "<p>A data de hoje é ",strftime($format),"</p>";
echo "<p>",strftime("Hoje é dia %d do %m de %Y às %Hh e %M minutos"),"</p>";