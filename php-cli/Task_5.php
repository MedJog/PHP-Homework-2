<?php
// С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
function power($val, $pow) {
  if ($pow == 0) {
      return 1;
  } elseif ($pow < 0) {
      return 1 / power($val, -$pow);
  }
  return $val * power($val, $pow - 1);
}

echo 'Результат: '. power(2, 3) . PHP_EOL; 
echo 'Результат: '. power(2, 0) . PHP_EOL; 
echo 'Результат: '. power(2, -3) . PHP_EOL; 


// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/Task_5.php
