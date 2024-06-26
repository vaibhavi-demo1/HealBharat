<?php
		$conn= mysqli_connect("localhost", "root", "", "info");
			if (!$conn)
			{
					die("Connection failed: " . mysqli_connect_error());
			}
			?>	
<html>
<center>
		<head>
	<style >
		input[type="text"],
        input[type="number"],
		input[type="email"],
        input[type="submit"] {
            padding: 5px;
            margin-bottom: 10px;
            width: 250px;
        }
		body
		{
			border:5px solid black;
			padding:10px;
			margin:120px;
			height:500px;
        }
		h1.abc
		{   height:50px;
			background-color:skyblue;
			border:3px solid white;
		}
		input[type=submit]
			{
					 width:90px;
					 height:30px;
					 background-color:skyblue;
					 text-color:white;
		
	</style>
		</head>
<h1 class="abc" >Registration Form</h1>
	<form method="POST">
		
			
			<h3>Enter User Name:</h3><input type="text" name="uname" id="uname">
			
			<h3>Email:</h3><input type="text" name="emailid" id="emailid">
			
			<h3>mobile no:</h3><input type="number" name="mbNO" id="mbNO" min="10" >
			<br>
			
			<input type="submit" name="submit" id="submit" value="Click here">
			<br><br>
			
	</form>			
</body>
</center>
</html>
				
				
<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
{
		if(empty($_POST['uname']))
		{
		echo "<br><center>Name can't be blank</center>";
		}

		$pattern= '/^([a-zA-Z0-9\._]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
		if(!preg_match($pattern,$_POST['emailid']))
		{
		echo "<br><center>Enter valid Email id</center>";
		}
}
		
	if(isset($_POST['submit']))
	{
		$u= $_POST['uname'];
		$e= $_POST['emailid'];
		$m= $_POST['mbNO'];
		
		
		$q= "insert into userinfo values('$u','$e','$m')";
		 if (mysqli_query($conn, $q)) 
     {
           echo "<center>New record inserted successfully</center>";
     }
    else 
     {
         echo "Error: " . $q . "<br>" . mysqli_error($conn);
     }
			
			
			
																	
			
			
		
	}
?>