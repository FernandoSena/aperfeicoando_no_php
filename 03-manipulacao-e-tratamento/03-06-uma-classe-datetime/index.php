<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define("DATE_BR","d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1999-02-25");
$dateStatic = DateTime::createFromFormat(DATE_BR,"25/02/1999 00:00:00");

var_dump(
    $dateNow,
    $dateBirth
);
var_dump(
    $dateNow->format(DATE_BR),
    $dateNow->format("d")
);

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);
var_dump(
    $newDateTime
);
/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");//Cria intervalo de tempo
$dateTime = new DateTime("now");
$dateTime->add($dateInterval);//Adiciona intervalo de tempo na data
$dateTime->sub($dateInterval);//Subtrai intervalo de tempo na data

var_dump($dateTime);

$birth = new DateTime(date("Y")."-02-25");
$dateNow = new DateTime("now");
$diff = $dateNow->diff($birth);//Verifica a diferencia entre duas data
var_dump($diff);

if($diff->invert){
    echo "<p>Seu aniversario foi há {$diff->days} dias</p>";
}else{
    echo "<p>Faltam {$diff->days} para seu aniversario</p>";
}

$dateResources = new DateTime("now");
var_dump([
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
    $dateResources->add(DateInterval::createFromDateString("20days"))->format(DATE_BR)
]);

/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval("P6M");
$end = new DateTime("2022-01-01");

$period = new DatePeriod($start, $interval, $end);

foreach ($period as $recorrences){
    echo "<p>Proximo vencimento: {$recorrences->format(DATE_BR)}</p>";
}
