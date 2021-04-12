<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1"=>"AC/DC",
    "band_2"=>"Nirvana",
    "band_3"=>"Alter Bridge"
];

array_unshift($index, "", "Pearl Jum");
$assoc = ["band_4"=>"Pearl Jum", "band_5"=>""]+$assoc;

array_push($assoc, "");//Adiciona um valor no primeiro array
$assoc = $assoc+["band_6"=>""];

array_shift($index);//Retira o primeiro indice do array
array_shift($assoc);

array_pop($index);//Remove o último indice do array
array_pop($assoc);

array_unshift($index, "");

$index = array_filter($index);//Remove valores vázio de um array
$assoc = array_filter($assoc);

var_dump(
    $index,
    $assoc
);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);//Inverte a sequencia do array
$assoc = array_reverse($assoc);

asort($index);//Ordena pelo valor
asort($assoc);

ksort($index);//Ordena pelo key
ksort($assoc);

arsort($index);//Ordena os valores invertendo as ordens
arsort($assoc);

krsort($index);//Ordena pelo key invertendo as ordens
krsort($assoc);

sort($index);//Ordena pelo valor reindexando os keys
sort($assoc);

rsort($index);//Ordena pelo valor reindexando os keys ao inverso
rsort($assoc);

var_dump(
    $index,
    $assoc
);
/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump([
    array_keys($assoc),//Pecupera as chaves do array
    array_values($assoc)//Recupera os valores do array
]);

if(in_array("AC/DC", $assoc)){//Pesquisa se existe "AC/DC' em um array
    echo "<p>Cause I'm back</p>";
}
$arrToString = implode(", ",$assoc);

echo "<p>Eu curto {$arrToString} emuitas outras!</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString));
/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name"=>"Fernando",
    "company"=>"Softhubo",
    "mail"=>"fernandocarvalo.sena@gmail.com"
];
$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br>
        <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar email</a>
        </p>
    </article>
TPL;

$dados = "{{".implode("}}&{{", array_keys($profile))."}}";

echo str_replace(
    explode("&", $dados),
    array_values($profile),
    $template
);

