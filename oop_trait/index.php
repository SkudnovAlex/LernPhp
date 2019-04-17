<?php
require_once '/vendor/autoload.php';
use classes\BookProduct;
use classes\interfaces\IGadget;
use classes\NotebookProduct;

error_reporting(-1);

function offerCase (IGadget $product) {
    echo "<p>предлагаем челол для {$product->getName()}</p>";
}

$book = new BookProduct('Колобок', 55, 88);
$notebook = new NotebookProduct('Intel', 1000, 1177);

echo '<pre>'; print_r($book); echo '</pre>';
echo '<pre>'; print_r($notebook); echo '</pre>';

