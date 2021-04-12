<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

$folder = __DIR__."/upload";

if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, 0755);//Cria um diretório
}else{
    var_dump(
        scandir($folder)
    );
}

/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("copiar e renomear", __LINE__);

$file = __DIR__."/file.txt";
var_dump(
    pathinfo($file),
    scandir($folder),
    scandir(__DIR__)
);

if(!file_exists($file) || !is_file($file)){
    fopen($file, "w");
}else{
    //copy($file, $folder."/".basename($file));//Copia
//    var_dump( filemtime($file), filemtime(__DIR__."/uploads/file.txt");
    //rename(__DIR__."/upload/file.txt", __DIR__."/upload/".time().".".pathinfo($file)["extension"]);
    rename($file, __DIR__."/upload/".time().".".pathinfo($file)["extension"]);
}

/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);

$dirRemove = __DIR__."/remove";
$dirFiles = array_diff(scandir($dirRemove), ['.', '..']);
$dirCont = count($dirFiles);
var_dump($dirFiles, $dirCont);

if($dirCont >= 1){
    echo "<h2>Clear...</h2>";
    foreach (scandir($dirRemove) as $fileItem){
        $fileItem = __DIR__."/remove/{$fileItem}";
        if(file_exists($fileItem) && is_file($fileItem)){
            unlink($fileItem);
        }
    }
}else{
    rmdir($dirRemove);
}