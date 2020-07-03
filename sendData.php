<?php

$textField = "\n".$_POST['textField'];
$fileField = $_FILES['fileField'];
$filed = "txt.txt";
writeText($textField, $filed);
fileRecord($fileField);

function writeText($textField, $filed){
    $openFile = fopen($filed,'a'); //Открытие файла для записи
    fwrite($openFile, $textField); //Запись в файл
    fclose($openFile); //закрытие файла
}

function fileRecord($fileField){
    if(isset($_FILES) && $fileField['error'] == 0) { // Проверяем, загрузил ли пользователь файл
        $path = __DIR__ . '\files'; // Директория для размещения файла

        $destinationFile = $path .'/'. basename($fileField['name']);
        echo $destinationFile;
        move_uploaded_file($fileField['tmp_name'], $destinationFile); // Перемещаем файл в желаемую директорию
       // echo 'File Uploaded'; // Оповещаем пользователя об успешной загрузке файла
    }
}