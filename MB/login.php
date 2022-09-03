<?php

   session_start();
   
   include ("classes/connect.php"); 
   include ("classes/login.php");

   
   $email = "";
   $password = "";
   
   if ($_SERVER['REQUEST_METHOD']=='POST')// same as we check for post 
   {
   	 $login = new Login();
   	 $result = $login->evaluate($_POST);

   	 if ($result!=" ") //space was missing
   	 {
   	 	echo "<div style='text-align: center';>"; 
   	 	echo "these errors: <br>";
   	 	echo $result;
   	 	echo "</div>";
   	 }

   	 else
   	 {
        header("Location: profile.php");
        die;

   	 }

     $email = $_POST['email'];
     $password = $_POST['password'];


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
	<div id="log">Log in</div>
</div>	

<div id="bar2">
	  <form method="post">
	Login to Talkline<br><br>
	<input name="email" type="text" id="t" placeholder="Email" value="<?php echo $email ?>"><br><br>
	<input name="password" type="password" id="t" placeholder="password" value="<?php echo $password?>"><br><br>
	<input type="submit" id="button" value="Login"><br><br><br>
     </form>
</div>
</body>

</html>