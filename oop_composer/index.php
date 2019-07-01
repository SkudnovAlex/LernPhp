<?php
require_once '/vendor/autoload.php';
use classes\BookProduct;
use classes\interfaces\IGadget;
use classes\NotebookProduct;
use PHPMailer\PHPMailer\PHPMailer;

error_reporting(-1);

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

$mail = new PHPMailer();
echo '<pre>'; print_r($mail); echo '</pre>';