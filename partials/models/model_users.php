<?php
class Model_Users extends Model
{
	public function get_data()
	{	
		return $users = file_get_contents("dataset\users.json");
	}
}