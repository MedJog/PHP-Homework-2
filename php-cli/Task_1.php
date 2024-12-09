<?php
// 1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return.

function calculate($num1, $num2, $action) {   
    if($action === '+') {
      $result = $num1 + $num2;
      return "$num1 + $num2 = $result\n";
    }
    elseif($action === '-') {
      $result = $num1 - $num2;
      return "$num1 - $num2 = $result\n";
    }
    elseif($action === '*') {
      $result = $num1 * $num2;
      return "$num1 * $num2 = $result\n";
    }
    elseif($action === '/') {
      $result = $num1 / $num2;
      return "$num1 / $num2 = $result\n";
    }
    else {
      return "Вы ввели неправильные данные\n";
    }
}
echo 'Результат: ' .calculate(3, 4, '+');
echo 'Результат: ' .calculate(2, 5, '-');
echo 'Результат: ' .calculate(5, 2, '*');
echo 'Результат: ' .calculate(15, 3, '/');
echo 'Результат: ' .calculate(15, 3, '=');


// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/Task_1.php