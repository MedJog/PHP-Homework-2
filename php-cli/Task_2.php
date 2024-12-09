<?php
// 2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation) {   
    switch($operation)
        {
            case '+': 
                $result = $arg1 + $arg2;
                return "$arg1 + $arg2 = $result\n";
                break;
            case '-': 
                $result = $arg1 - $arg2;
                return "$arg1 - $arg2 = $result\n";
            case "*": 
                $result = $arg1 * $arg2;
                return "$arg1 * $arg2 = $result\n";
            case '/': 
                $result = $arg1 / $arg2;
                return "$arg1 / $arg2 = $result\n";
            default: 
                return 'Вы ввели неправильные данные';
        }
}
echo 'Результат: ' .mathOperation(2, 2, '+');
echo 'Результат: ' .mathOperation(5, 2, '-');
echo 'Результат: ' .mathOperation(5, 2, '*');
echo 'Результат: ' .mathOperation(5, 2, '/');
echo 'Результат: ' .mathOperation(5, 2, '==');


// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/Task_2.php