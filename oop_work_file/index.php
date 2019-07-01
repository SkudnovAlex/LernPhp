<?php

require_once 'classes/File.php';

$file = new File(__DIR__ . '/file.txt')()_;
$file->write('- привет!');
$file->write('- Как дела?');
$file->write('- Хорошо. А у тебя?');
$file->write('- И у меня Хорошо!');
$resAdd = $file->write('Хорошо, что у всех все хорошо!');
var_dump($resAdd);