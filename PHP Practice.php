PHP Practice

1 
<?php
 for ($row=0; $row<=7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}

?>


2
<?php
$arra = array("uglify-js"=> "1.3.4", "jshint"=> "0.9.1", "recess"=> "1.1.8" ,"connect"=> "2.1.3", "hogan.js"=>"2.0.0"); 
$myarray = array('red', 'green', 'white');
var_dump(json_encode($arra));
echo "\n";
var_dump(json_encode($myarray));
?>

3
<?php
function json_error_message($json_str)
{
$json[] = $json_str;
echo $json;
foreach ($json as $string)
{
echo 'Decoding: ' . $string."\n";
json_decode($string);

switch (json_last_error())
{
case JSON_ERROR_NONE:
echo ' - No errors'."\n";
break;
case JSON_ERROR_DEPTH:
echo ' - Maximum stack depth exceeded'."\n";
break;
case JSON_ERROR_STATE_MISMATCH:
echo ' - Underflow or the modes mismatch'."\n";
break;
case JSON_ERROR_CTRL_CHAR:
echo ' - Unexpected control character found'."\n";
break;
case JSON_ERROR_SYNTAX:
echo ' - Syntax error, malformed JSON'."\n";
break;
case JSON_ERROR_UTF8:
echo ' - Malformed UTF-8 characters, possibly incorrectly encoded'."\n";
break;
default:
echo ' - Unknown error'."\n";
break;
}
}
}
json_error_message('{"color1": "Red Color"}');
?>

4
function missing_number($num_list)
{
 // construct a new array
$new_arr = range($num_list[0],max($num_list));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num_list);

}
print_r(missing_number(array(1,2,3,6,7,8)));
print_r(missing_number(array(10,11,12,14,15,16,17)));
?>

5
<?php
function three_Sum($arr, $target)
{
$count = count($arr) - 2;
$result=[];
for ($x = 0; $x < $count; $x++) {
    if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $target) {
        array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $target");
    }
}
return $result;
}
$my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
print_r(three_Sum($my_array, 16));
print_r(three_Sum($my_array, 11));
print_r(three_Sum($my_array, 12));
?>

6
<?php
function my_sqrt($n)
{
  $x = $n;
  $y = 1;
  while($x > $y)
  {
    $x = ($x + $y)/2;
    $y = $n/$x;
  }
  return $x;
}
print_r(my_sqrt(16)."\n");
print_r(my_sqrt(14)."\n");
?>

7
<?php
function single_number($arr)
{
   $ones = 0;
   $twos = 0;
   $common_one_two = 0;
       for($i=0; $i<sizeof($arr); $i++)
       {
           $twos  = $twos | ($ones & $arr[$i]);
            
            $ones  = $ones ^ $arr[$i];
             $common_one_two = ~($ones & $twos);
             $ones &= $common_one_two;
             $twos &= $common_one_two;                    
       }
     return $ones;
}
$arr1 = array(5, 3, 4, 3, 5, 5, 3);
$arr2 = array(-1, 1, 1, -1, -1, 1, 0);
print_r($arr1);
print_r('Single Number: '.single_number($arr1)."\n");
print_r($arr2);
print_r('Single Number: '.single_number($arr2)."\n");
?>

8
<?php
function is_arithmetic($arr)
  {
   $delta = $arr[1] - $arr[0];
   for($index=0; $index<sizeof($arr)-1; $index++)
    {
        if (($arr[$index + 1] - $arr[$index]) != $delta)
        {
             
             return "Not an arithmetic sequence";
        }       
    }
    return "An arithmetic sequence";
}
$my_arr1 = array(6, 7, 9, 11);
$my_arr2 = array(5, 7, 9, 11);

print_r(is_arithmetic($my_arr1)."\n");
print_r(is_arithmetic($my_arr2)."\n");
?>

9
<?php
function reverse_integer($n)
{
    $result = 0;
    for($i= 0; $i<32; $i++)
        {
            $result <<= 1;
            $result|= ($n & 1);
            $n >>= 1;
        }
        return $result;

}   
print_r(reverse_integer(1234)."\n");
?>

10
<?php
function add_digits($num)
{
      if ( $num > 0)
      {
      return ($num - 1) % 9 + 1;
      }
      else
      {
          return 0;
      }
}

print_r(add_digits(48)."\n");
print_r(add_digits(59)."\n");
?>

