<?php
include('phpseclib/Math/BigInteger.php');

function ibanCheckDigit($iban) {
  $word = substr($iban, 4, strlen($iban)-1) . $iban[0] . $iban[1] . '00';

  $a = array(
  'A' => 10,
  'B' => 11,
  'C' => 12,
  'D' => 13,
  'E' => 14,
  'F' => 15,
  'G' => 16,
  'H' => 17,
  'I' => 18,
  'J' => 19,
  'K' => 20,
  'L' => 21,
  'M' => 22,
  'N' => 23,
  'O' => 24,
  'P' => 25,
  'Q' => 26,
  'R' => 27,
  'S' => 28,
  'T' => 29,
  'U' => 30,
  'V' => 31,
  'W' => 32,
  'X' => 33,
  'Y' => 34,
  'Z' => 35
  );

  $out = strtr($word,$a);
  $num = new Math_BigInteger($out);
  $rem = bcmod($num, '97');
  $calc = 98 - $rem;
  $num_padded = sprintf("%02d", $calc);

  return $iban[0] . $iban[1] . $num_padded .substr($iban, 4, strlen($iban)-1);
}

?>
