<?php

//insert.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$name = '';
$sex = '';
$dob = '';
$bio = '';

if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM tbl_director WHERE id='".$form_data->id."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['name'] = $row['name'];
		$output['sex'] = $row['sex'];
		$output['dob'] = $row['dob'];
		$output['bio'] = $row['bio'];
	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM tbl_director WHERE id='".$form_data->id."'
	";
	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$output['message'] = 'Data Deleted';
	}
}
else
{
	if(empty($form_data->name))
	{
		$error[] = 'Name is Required';
	}
	else
	{
		$name = $form_data->name;
	}

	if(empty($form_data->sex))
	{
		$error[] = 'Sex is Required';
	}
	else
	{
		$sex = $form_data->sex;
	}

	if(empty($form_data->dob))
	{
		$error[] = 'dob is Required';
	}
	else
	{
		$dob = $form_data->dob;
	}

	if(empty($form_data->bio))
	{
		$error[] = 'bio is Required';
	}
	else
	{
		$bio = $form_data->bio;
	}

	if(empty($error))
	{
		if($form_data->action == 'Insert')
		{
			$data = array(
				':name'		=>	$name,
				':sex'		=>	$sex,
				':dob'		=>	$dob,
				':bio'		=>	$bio,
			);
			$query = "
			INSERT INTO tbl_director 
				(name, sex, dob, bio) VALUES 
				(:name, :sex, :dob, :bio)
			";
			$statement = $connect->prepare($query);
			if($statement->execute($data))
			{
				$message = 'Data Inserted';
			}
		}
		if($form_data->action == 'Edit')
		{
			$data = array(
				':name'	=>	$name,
				':sex'	=>	$sex,
				':dob'	=>	$dob,
				':bio'	=>	$bio,
				':id'			=>	$form_data->id
			);
			$query = "
			UPDATE tbl_director 
			SET name = :name, sex = :sex, dob = :dob, bio = :bio
			WHERE id = :id
			";

			$statement = $connect->prepare($query);
			if($statement->execute($data))
			{
				$message = 'Data Edited';
			}
		}
	}
	else
	{
		$validation_error = implode(", ", $error);
	}

	$output = array(
		'error'		=>	$validation_error,
		'message'	=>	$message
	);

}



echo json_encode($output);

?>