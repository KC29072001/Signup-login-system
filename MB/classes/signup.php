<?php

class Signup
{
	private $error = "";
	public function evaluate ($data)
	{
		foreach ($data as $key => $value)
		{
			if (empty($value))
			{
				$this->error = $this->error  . $key . " is empty <br>";
			}
			if ($key == "email")
			{
				//if (!preg_match("/([\W\-]+\@[\W\-]+\.[\W\-]+)/", $value))
				if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $value)) 
				{
				    $this->error = $this->error . " invalid email <br>" ; //checks email and submits to db when entered fine
				}
			} 
		}

		if($this->error == "")
		{
			// then proceed forward
			$this->create_user($data);// becoz func is inside same class

		} 
		else
		{
			return $this->error;
		}

	}

	private function create_user($data)
	{

		$first_name = $data['first_name'];//1st is variable and 2nd is inside data array
		$last_name = $data['last_name'];
		$gender = $data['gender'];
		$email = $data['email'];
		$password = $data['password'];


		$url_address = strtolower($first_name).".".strtolower($last_name);
		$userid = $this->create_userid();

		$query = "insert into users(userid,first_name,last_name,gender,email,password,url_address)
		values ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";

		//echo $query;

		

		$DB = new Database();
		$DB->save($query); 
	}

	private function create_userid()
	{
		$number = "";
		$length = rand(4,19);
		for ($i=0; $i < $length ; $i++) 
		{ 
			$new_rand = rand(0,9);
			$number = $number . $new_rand;
		}
		return $number;

	}


}