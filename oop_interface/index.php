<?php
error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/IGadget.php';
require_once 'classes/BookProduct.php';
require_once 'classes/NotebookProduct.php';

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