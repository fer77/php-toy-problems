<?php
// Create a function named that takes an integer and returns an array with all of the integer's divisors(except for 1 and the number itself). If the number is prime return the string '(integer) is prime'.

function divisors($integer) {
  $divArr = [];
      
  for ($i = 2; $i < $integer; $i++) {
    if ($integer % $i == 0) {
      $divArr[] = $i;
    }
  }
  
  return $divArr != [] ? $divArr : $integer . ' is prime';
}