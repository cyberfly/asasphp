<h1>Edit Question</h1>

<?php

$question_id = $_GET['id']; 

$db->where ("id", $question_id);
$question= $db->getOne ("tb_question");

?>

<form action="http://asasphp.dev/submit_edit_form.php" method="post">
	
	<p><input type="hidden" name="question_id" value="<?php echo $question_id; ?>" ></p>

	<p>Question Title</p>

	<p>
		<input type="text" name="question_title" value="<?php echo $question['question_title']; ?>" />
	</p>

	<p>Question Desc</p>

	<p>		
		<textarea name="question_desc" rows="5" cols="40" ><?php echo $question['question_desc']; ?></textarea>
	</p>

	<p>
		<input class="btn btn-success" type="submit" value="Submit Form" />
	</p>

</form>