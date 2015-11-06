<?php

$first_name = 'Ahmad';

$last_name = 'Fauzi';

$contact_no = '099442333'; 

$user_info = array('first_name' => $first_name , 'last_name'=> $last_name, 'contact_no' => $contact_no );

// dapatkan last_name
// dari array

$get_first_name = $user_info['first_name'];

// sekarang kita boleh echo
// kerana $get_first_name
// is not an array

echo $get_first_name;

?>