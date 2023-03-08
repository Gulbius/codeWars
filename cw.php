  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  </head>
  <body>
    <?php
/// Create a function that accepts a string and a single character, and returns an integer of the count of occurrences the 2nd argument is found in the first one.If no occurrences can be found, a count of 0 should be returned.
    function strCount($str, $letter) {
    $count =0;
    $ilgis = strlen($str);
      for ($i = 0; $i < $ilgis; $i++) {
          if ($str[$i] == $letter) {
              $count++;
          }
      }
   return $count;
  }
///////////////// Determine if the sex of the offspring will be male or female based on the X or Y chromosome present in the male's sperm.If the sperm contains the X chromosome, return "Congratulations! You're going to have a daughter."; If the sperm contains the Y chromosome, return "Congratulations! You're going to have a son."
function chromosomeCheck($str) {
    if ($str == "XX") {
      return "Congratulations! You're going to have a daughter.";
    } if ($str == "XY") {
      return "Congratulations! You're going to have a son.";
    }
  }

  
//////////////Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers.

function even_or_odd(int $n): string {
    if ($n % 2 == 0){
      return "Even";
    }
    return "Odd";
  }
//////////
function even_or_odd2(int $n): string {
   return  ($n % 2 == 0) ?   "Even" : "Odd";
  }
/////////////////////////////You are given two interior angles (in degrees) of a triangle.Write a function to return the 3rd.Note: only positive integers will be tested.

function otherAngle($a, $b) {
    return 180 - $a - $b;
  }
///// This kata is about multiplying a given number by eight if it is an even number and by nine otherwise.
function simpleMultiplication($number) {
    if($number % 2 ==0){
      $number *= 8;
    //   $number = $number * 8;
    }else{
      $number *=9;
    }
      return $number;
    }
///// Create a function that checks if a number n is divisible by two numbers x AND y. All inputs are positive, non-zero numbers.
function is_divisible($n, $x, $y) {
    if ($n % $x == 0 && $n % $y == 0) {
   return true;
   } else {
   return false;
   }
   }
   function is_divisible2($n, $x, $y) {
       return ($n % $x == 0 && $n % $y == 0) ? true : false;
   }


    ?>
















  </body>
  </html>