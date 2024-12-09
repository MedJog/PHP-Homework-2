<?php 
// Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). Написать функцию транслитерации строк.
$transliterationMap = [
  'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
  'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
  'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
  'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
  'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
  'ш' => 'sh', 'щ' => 'shch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
  'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];
function transliterate($string, $map) {
  // Преобразуем строку в нижний регистр
  $string = mb_strtolower($string, 'UTF-8');
  // Заменяем символы с использованием массива
  $transliterated = strtr($string, $map);
  return $transliterated;
}
$text = "Я помню чудное мгновенье...";
echo transliterate($text, $transliterationMap);

$text2 = "Жили у бабуси два весёлых гуся";
echo transliterate($text2, $transliterationMap);



// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/Task_4.php