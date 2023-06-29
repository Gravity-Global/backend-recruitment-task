<?php
class Model_Users extends Model
{

	private	$file = "dataset\users.json";

	
	public function get_data()
	{	
		return $users = file_get_contents($this->file);
	}

	
	public function save($data)
	{	
		$data = json_encode($data, JSON_PRETTY_PRINT);  
		file_put_contents($this->file, $data);

		return true;
	}
}