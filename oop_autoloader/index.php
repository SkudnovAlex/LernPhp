<?php

use classes\BookProduct;
use classes\interfaces\IGadget;
use classes\NotebookProduct;

error_reporting(-1);

function autoloader_classes($class){
    $class = str_replace("\\", "/", $class);
    $file = __DIR__ . "/$class.php";
    if (file_exists($file)){
        require_once $file;
    }
}
spl_autoload_register('autoloader_classes');

function offerCase (IGadget $product) {
    echo "<p>предлагаем челол для {$product->getName()}</p>";
}

$book = new BookProduct('Колобок', 55, 88);
$notebook = new NotebookProduct('Intel', 1000, 1177);

echo '<pre>'; print_r($book); echo '</pre>';
echo '<pre>'; print_r($notebook); echo '</pre>';

print_r($book->getProduct());
print_r($notebook->getProduct());

var_dump($notebook instanceof IGadget);
offerCase($notebook);