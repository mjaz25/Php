<?php

interface Motor
{
  function drive(): void;

  function getTires(): int;
}

class Supra implements Motor
{
  function drive(): void
  {
    echo "On" . PHP_EOL;
  }

  function getTires(): int
  {
    return 2;
  }
}
