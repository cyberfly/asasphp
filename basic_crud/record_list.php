<table cellspacing="0" class="" >
	<thead>	
		<tr>
			<th>Question ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php	

	$questions = $db->get('tb_question');	

	// check if there is any question in the array

	if (!empty($questions)) {
		
		// loop through the array
		foreach ($questions as $key => $value) {

	?>

	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['question_title']; ?></td>
		<td><?php echo $value['question_desc']; ?></td>
		<td>
			<!-- url to edit page, must pass ID -->
			<a class="btn btn-primary" href="<?php echo 'http://asasphp.dev/edit_form.php?id='.$value['id']; ?>">Edit</a>
			<!-- url to delete page, must pass ID -->
			<a class="btn btn-danger delete" href="<?php echo 'http://asasphp.dev/delete_form.php?id='.$value['id']; ?>">Delete</a>
		</td>
	</tr>

	<?php

		} //end foreach 

	} //end of not empty

	?>
	</tbody>
</table>