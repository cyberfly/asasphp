<?php 

$ic_number = '880808-29-1234';

// kita guna explode
// untuk dapatkan kod negeri 29

$exp_ic_number = explode('-', $ic_number);

// setelah explode, 
// $exp_ic_number ialah array
//guna var_dump untuk dapatkan array key

//var_dump($exp_ic_number);
//hasil var_dump

/*
array (size=3)
  0 => string '880808' (length=6)
  1 => string '29' (length=2)
  2 => string '1234' (length=4)
*/

$state_code = $exp_ic_number[1];

echo $state_code;

// hasilnya 29

?>