<?php

   include ("classes/connect.php"); 
   include ("classes/signup.php");

   $first_name = "";
   $last_name = "";
   $gender = "";
   $email = "";
   
   if ($_SERVER['REQUEST_METHOD']=='POST')
   {
   	 $signup = new Signup();
   	 $result = $signup->evaluate($_POST);

   	 if ($result!="") 
   	 {
   	 	echo "<div style='text-align: center';>";
   	 	echo "these errors: <br>";
   	 	echo $result;
   	 	echo "</div>";
   	 }

   	 else
   	 {
        header("Location: login.php");
        die;

   	 }

   	 $first_name = $_POST['first_name'];// (2nd one)these are not variables instead table indexes so no $ sign 
     $last_name = $_POST['last_name'];
     $gender = $_POST['gender'];
     $email = $_POST['email'];


   }   
   
   



?>



<html>

<head>

<title>Talkline</title>

</head>

<style >
	
	#bar1 
	{
		height: 100px;
		background-color: purple;
		color: #d9dfeb;
		padding: 4px;
	}

	#log
	{
		background-color: #42b72a;
		width: 70px;
		text-align: center;
		padding: 4px;
		float: right;

	}

	#bar2
	{
		background-color: white;
		width: 800px;
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
		text-align: center;
		font-weight: bold;
	}
	#t
	{

		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #ccc;
		padding: 4px;
		font-size: 14px;

	}
	#button
	{
		width: 300px;
		height: 40px;
		font-weight: bold;
		border: none;
		color: white;
		background-color: purple;

	}
</style>

<body style="font-family: tahoma; background-color: #e9ebee;">

<div id = "bar1">
	<div style="font-size: 40px;">Talkline</div>
	<div id="log">Signup</div>
</div>	

<div id="bar2">
	Signup on Talkline<br><br>
	<form method="post" action="signup.php">
	<input value="<?php echo $first_name?>" name ="first_name" type="text" id="t" placeholder="Fname"><br><br>
	<input value="<?php echo $last_name?>"name="last_name" type="text" id="t" placeholder="Lname"><br><br>
	<span style="font-weight: normal;">Gender</span><br>
	<select id="t" name="gender">
		<option><?php echo $gender?></option>
		
		<option>M</option>
		<option>F</option>

	</select>
	<br><br>
	<input value= "<?php echo $email?>" type="text" id="t" placeholder="Email" name="email"><br><br>
	<input type="password" id="t" placeholder="password" name="password"><br><br>
	<input type="password" id="t" placeholder="retype password" name="password"><br><br>
	<input type="submit" id="button" value="Signup"><br><br><br>
	</form>

</div>
</body>

</html>