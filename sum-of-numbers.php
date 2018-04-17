<?php

class SequenceSum {
  public function showSequence($count) {
     if ($count < 0) {
       return $count . '<0';
     }
     
     if ($count == 0) {
       return '0=0';
     }
     
     return implode('+', range(0, $count)) . ' = ' . ($count * ($count + 1) / 2);
  }
}