<?php
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	
	$con=mysqli_connect("localhost","root","","database_name");
	/*Replace database_name with the name of your database*/ 

	$q=mysqli_query($con,"SELECT * FROM table_name WHERE fname='$fname' and lname='$lname'");
	/*Replace table_name with the name of your table*/ 

	if(mysqli_connect_errno()){echo "Fail".mysqli_connect_errno();}

	if(mysqli_num_rows($q)>0){

		$fetch=mysqli_fetch_array($q,MYSQLI_ASSOC);
		print_r($fetch);

	} else
	{	
		echo"Creating new user";

		$q=mysqli_query($con,"INSERT into table_name(fname,lname) values('$fname','$lname')");
		/*Replace table_name with the name of your table*/ 
		
	if(mysqli_connect_errno()){echo"Fail".mysqli_connect_errno();}
	}

	mysqli_close($con);

	
?>


	


