<?php
require_once 'Classes/Garden.php';

function randHash($len=32)
{
    return substr(md5(openssl_random_pseudo_bytes(20)),-$len);
}

$trees = ['apples' => [], 'pears' => []];

for ($i = 0; $i < 10; $i++) {
    array_push($trees['apples'], ['id' => randHash('22')]);

}

for ($i = 0; $i < 15; $i++) {
    array_push($trees['pears'], ['id' => randHash('22')]);

}

$garden = new Garden($trees);
echo 'Дерево добавлено'.PHP_EOL;

$garden->addTree(['apples' => ['id' => randHash('22')]]);

echo 'Fruits collected'.PHP_EOL;
print_r($garden->collectFruits());

echo 'Mass of fruits:'.PHP_EOL;
print_r($garden->massOfFruitsByEachTree());