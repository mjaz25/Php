<?php

class Shape
{
  function getCorner(): int
  {
    return 0;
  }
}

class Rectangle extends Shape
{
  function getCorner(): int
  {
    return 3;
  }

  function getParentCorner(): int
  {
    return parent::getCorner(); // Parent Keyword
  }
}
