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

echo "Task 4\n";

echo "Этот файл: " . __FILE__ . "\n";
echo "Эта строка: " . __LINE__ . "\n";

echo "### ###\n";
echo "\n";

echo "Task 5\n";

$heredoc_string = <<<EOT
Это
многострочная строка,
созданная с использованием синтаксиса heredoc.
Она может содержать переменные $a and $b.
EOT;

echo $heredoc_string;

echo "### ###\n";
?>