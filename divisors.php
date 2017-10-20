<?php
// Create a function named that takes an integer and returns an array with all of the integer's divisors(except for 1 and the number itself). If the number is prime return the string '(integer) is prime'.

function divisors($integer) {
  // add divisors to an array
  $intDivisors = [];
  // loop over $integer variable
  for ($i = 2; $i < $integer; $i++)
  {
  // find the $integer divisors
    if (!($integer % $i))
    {
  // retrun divisors, except for 1 and the $integer itself
      $intDivisors[] = $i;
    }
  }
  // if prime print $integer . ' is prime'
  return $intDivisors ? : $integer . ' is prime';
}
 ?>
