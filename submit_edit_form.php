<?php

$redirect = 'http://asasphp.dev/record_list.php';

if (isset($_POST) && !empty($_POST)) {	
	
	// dapatkan hidden field value mengandungi ID REKOD
	$question_id = $_POST['question_id'];
	
	$question_title = $_POST['question_title'];
	$question_desc = $_POST['question_desc'];

	$data = array (
		    	'question_title' => $question_title,
		    	'question_desc' => $question_desc
		    	);

	// beritahu nak update spesifik rekod berdasarkan ID REKOD

	$db->where ('id', $question_id);

	// update maklmuat ke table tb_question dalam database

	$result = $db->update  ('tb_question', $data);

	if ($result)
	{
	    $_SESSION['success_message'] = 'The records have been sucessfully updated';
	}
	else
	{
 		$_SESSION['error_message'] = $db->getLastError();
 	}

 	header('Location: '.$redirect);
	
}
else
{
	$_SESSION['error_message'] = 'No record update';
	header('Location: '.$redirect);
}

?>