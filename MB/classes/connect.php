<?php 

class Database
{



private $host = "localhost:8111";// we are working here
private $username = "root";
private $password = "";
private $db = "talkline_db";


function connect()
{

	$conn = mysqli_connect($this->host,$this->username,$this->password,$this->db);
	return $conn;
} 

function read($query)
{
	$con = $this->connect();
	$result = mysqli_query($con,$query);

	if (!$result)
	{
		return false;
	}
	else

	{
		$data = false;
		while ($row = mysqli_fetch_assoc($result)) 
		{
			//echo "<pre>";
			//print_r($row);
			//echo "<pre>";
			$data[]=$row;
		}
		return $data;
	}

}

function save($query)
{
	$con = $this->connect();
	$result = mysqli_query($con,$query);

	if (!$result)
	{
		return false;
	}
	else
	{
		return true;
	}


}
}

$DB = new Database();