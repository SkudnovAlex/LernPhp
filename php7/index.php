<?php

//$res = $_GET['a'] ?? $_GET['b'] ?? $_GET['cc'] ?? 'по-умолчанию';
//echo '<pre>'; print_r($res); echo '</pre>';


//$a = 3.5;
//$b = 9;
//var_dump($a <=> $b);
//if (($a <=> $b) === 0) {
//    echo 'равны';
//} elseif (($a <=> $b) == 1) {
//    echo 'первая переменная больше';
//} elseif (($a <=> $b) == -1) {
//    echo 'первая переменная меньше';
//}


//function sumOfInts(int ...$ints) {
//    return array_sum($ints);
//}
//var_dump(sumOfInts(2, '3', 4.1));


//function arraysSum(array ...$arrays) :array
//{
//    return array_map(function(array $array): int {
//        return array_sum($array);
//    }, $arrays);
//}
//
//var_dump(arraysSum([1,2,3], [4,5,6], [7,8,9]));


//define('CITY', [
//    'Saransk' => 'text1',
//    'Moskow' => 'text2',
//    'Penza' => 'text3',
//]);
//echo CITY['Penza'];


//interface Logger {
//    public function log(string $msg);
//}
//class Application {
//    private $logger;
//
//    public function getLogger(): Logger {
//        return $this->logger;
//    }
//
//    public function setLogger(Logger $logger) {
//        $this->logger = $logger;
//    }
//}
//$app = new Application;
//$app->setLogger(new class implements Logger {
//    public function log(string $msg) {
//        echo $msg;
//    }
//});
//
//var_dump($app->getLogger());

var_dump(intdiv(5, 2));