<?php

//insert.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$movie_name = '';
$year = '';
$plot = '';
$director = '';
$actor = '';

if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM tbl_sample WHERE id='".$form_data->id."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['movie_name'] = $row['movie_name'];
		$output['year'] = $row['year'];
		$output['plot'] = $row['plot'];
		$output['director'] = $row['director'];
		$output['actor'] = $row['actor'];
	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM tbl_sample WHERE id='".$form_data->id."'
	";
	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$output['message'] = 'Data Deleted';
	}
}
else
{
	if(empty($form_data->movie_name))
	{
		$error[] = 'Movie Name is Required';
	}
	else
	{
		$movie_name = $form_data->movie_name;
	}

	if(empty($form_data->year))
	{
		$error[] = 'Year is Required';
	}
	else
	{
		$year = $form_data->year;
	}

	if(empty($form_data->plot))
	{
		$error[] = 'Plot is Required';
	}
	else
	{
		$plot = $form_data->plot;
	}

	if(empty($form_data->director))
	{
		$error[] = 'Director is Required';
	}
	else
	{
		$director = $form_data->director;
	}

	if(empty($form_data->actor))
	{
		$error[] = 'Actor is Required';
	}
	else
	{
		$actor = $form_data->actor;
	}

	if(empty($error))
	{
		if($form_data->action == 'Insert')
		{
			$data = array(
				':movie_name'		=>	$movie_name,
				':year'		=>	$year,
				':plot'		=>	$plot,
				':director'		=>	$director,
				':actor'		=>	$actor
			);
			$query = "
			INSERT INTO tbl_sample 
				(movie_name, year, plot, director, actor) VALUES 
				(:movie_name, :year, :plot, :director, :actor)
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
				':movie_name'	=>	$movie_name,
				':year'	=>	$year,
				':plot'	=>	$plot,
				':director'	=>	$director,
				':actor'	=>	$actor,
				':id'			=>	$form_data->id
			);
			$query = "
			UPDATE tbl_sample 
			SET movie_name = :movie_name, year = :year, plot = :plot, director = :director, actor = :actor
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