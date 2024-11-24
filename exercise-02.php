#!/usr/bin/php
<?php
$messages = [
  'queries' => [
    'getNumeric' => 'Введите число:'
  ],
  'errors' => [
    'notNumeric' => 'Введите, пожалуйста, число.',
    'notInt' => 'Вы ввели не целое число.',
    'isZero' => 'На ноль делить нельзя.',
  ],
  'result' => 'Результат деления первого числа на второе: ',
];

do {
  $isValid = true;

  fwrite(STDOUT, $messages['queries']['getNumeric'] . PHP_EOL);
  $a = trim(fgets(STDIN));

  if (is_numeric($a)) {
    $a *= 1;

    if (!is_int($a)) {
      fwrite(STDERR, $messages['errors']['notInt'] . PHP_EOL);
      $isValid = false;
    }
  } else {
    fwrite(STDERR, $messages['errors']['notNumeric'] . PHP_EOL);
    $isValid = false;
  }
} while (!$isValid);

do {
  $isValid = true;

  fwrite(STDOUT, $messages['queries']['getNumeric'] . PHP_EOL);
  $b = trim(fgets(STDIN));

  if (is_numeric($b)) {
    $b *= 1;

    if (!is_int($b)) {
      fwrite(STDERR, $messages['errors']['notInt'] . PHP_EOL);
      $isValid = false;
    } elseif ($b === 0) {
      fwrite(STDERR, $messages['errors']['isZero'] . PHP_EOL);
      $isValid = false;
    }
  } else {
    fwrite(STDERR, $messages['errors']['notNumeric'] . PHP_EOL);
    $isValid = false;
  }
} while (!$isValid);

fwrite(STDOUT, $messages['result'] . $a/$b . PHP_EOL);