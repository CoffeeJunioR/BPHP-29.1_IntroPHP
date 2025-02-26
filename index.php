<?php
echo "Task 2\n";

$a='Рыба';
$b='человек';

echo "$a рыбою сыта, а $b человеком\n";
echo "### ###\n";
echo "\n";

echo "Task 3\n";
$variable = 3.14;

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