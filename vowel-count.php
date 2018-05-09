<? php
 /*
    Return the number (count) of vowels in the given string.

    We will consider a, e, i, o, and u as vowels for this Kata.

    The input string will only consist of lower case letters and/or spaces.
 */

function getCount($str) {
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    for ($i = 0; $i < strlen($str); $i++) {
      if (in_array($str[$i], $vowels)) {
        $vowelsCount ++;
      }
    }
    
    return $vowelsCount;
  }