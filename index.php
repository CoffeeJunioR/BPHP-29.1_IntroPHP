<?php
// ### Task 2 - Знакомство с документацией ###
echo "Task 2\n";

$a='Рыба';
$b='человек';

echo "$a рыбою сыта, а $b человеком\n";
echo "### ###\n";
echo "\n";

// ### Task 3 - Определение типа переменной ###
echo "Task 3\n";
$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

if (is_bool($variable)) {
    $type = 'bool';
} elseif (is_float($variable)) {
    $type = 'float';
} elseif (is_int($variable)) {
    $type = 'int';
} elseif (is_string($variable)) {
    $type = 'string';
} elseif (is_null($variable)) {
    $type = 'null';
} else {
  $type = 'other';
}

echo "type is $type\n";
echo "### ###\n";
echo "\n";