<?php

function getGenap(int $max): Iterator
{
  for ($i = 0; $i < $max; $i++) {
    if ($i % 2 == 0) {
      yield $i;
    }
  }
}

$ganjilGenap = getGenap(100);
foreach ($ganjilGenap as $value) {
  echo "Genap $value" . PHP_EOL;
}
