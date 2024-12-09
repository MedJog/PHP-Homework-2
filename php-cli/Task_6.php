<?php 
// Написать функцию, которая вычисляет текущее время и 
// возвращает его в формате с правильными склонениями, 
// например: 
// 22 часа 15 минут
// 21 час 43 минуты.

function getCurrentTimeWithDeclensions() {
  $hours = (int)date('H');
  $minutes = (int)date('i');

  $hourForms = ['час', 'часа', 'часов'];
  $minuteForms = ['минута', 'минуты', 'минут'];

  return sprintf(
      "%d %s %d %s",
      $hours,
      getDeclension($hours, $hourForms),
      $minutes,
      getDeclension($minutes, $minuteForms)
  );
}

function getDeclension($number, $forms) {
  $number = abs($number) % 100;
  $lastDigit = $number % 10;
  if ($number >= 11 && $number <= 19) {
      return $forms[2];
  }
  if ($lastDigit == 1) {
      return $forms[0];
  }
  if ($lastDigit >= 2 && $lastDigit <= 4) {
      return $forms[1];
  }
  return $forms[2];
}


echo getCurrentTimeWithDeclensions();

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/Task_6.php
