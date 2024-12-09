<?php
// Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким: Московская область: Москва, Зеленоград, Клин Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт Рязанская область … (названия городов можно найти на maps.yandex.ru).

$regions = [
'Московская область' => ['Москва', 'Зеленоград', 'Клин', 'Химки', 'Красногорск'],
'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
'Тверская область' => ['Тверь', 'Торжок', 'Старица', 'Лихославль', 'Весъегонск']
];
foreach ($regions as $region => $cities) {
   // Вывод названия области
   echo $region . ": ";
   // Объединение названий городов в строку через запятую
   echo implode(", ", $cities);
   // Перенос строки для следующей области
   echo PHP_EOL;

}



// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/Task_3.php