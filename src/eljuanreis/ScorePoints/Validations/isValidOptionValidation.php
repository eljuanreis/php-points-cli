<?php

namespace elJuanReis\ScorePoints\Validations;

class isValidOptionValidation
{
  /**
   * @param number o número que será checado
   * @param range um array com todas as possibilidades possívels
   */
  public static function isValidOption(int $number, array $range) : bool
  {
    return is_numeric($number) && in_array($number, array_keys($range));
  }
}