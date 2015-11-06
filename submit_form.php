<?php

$redirect = 'http://asasphp.dev/record_list.php';

if (isset($_POST) && !empty($_POST)) {	
	
	$question_title = $_POST['question_title'];
	$question_desc = $_POST['question_desc'];

	$data = array (
	    	'question_title' => $question_title,
	    	'question_desc' => $question_desc
	    	);

	$id = $db->insert ('tb_question', $data);

	if ($id)
	{
	    $_SESSION['success_message'] = 'The records have been sucessfully inserted';
	}
	else
	{
 		$_SESSION['error_message'] = $db->getLastError();
 	}

 	header('Location: '.$redirect);
	
}
else
{
	$_SESSION['error_message'] = 'No record inserted';
	header('Location: '.$redirect);
}


?>