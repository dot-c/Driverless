<?php
	session_start();

	include('db-connection.php');

	function login(){
		
		global $connection;
		//Set time for time the user attempt again 
		if(isset($_SESSION['attempt_again']))
		{ 
			$now=time();
			//compare curent time with the time the user attampts again
			if($now>=$_SESSION['attempt_again'])
			{
				unset($_SESSION['attempt']);
				unset($_SESSION['attempt_again']);
			}
		}

		if(isset($_POST['submit'])) 
		{
			if(!isset($_SESSION['attempt']))
			{
				$_SESSION['attempt']=3;
			}
				//Last attempt for suser
				if($_SESSION['attempt']==0)
				{
					echo "<div class='alert alert-danger' role='alert'>Attempts failed</br>Please try Again in a 10 Minutes</div>";
					$_SESSION['attempt_again']=time() +(10*60);
					$time=$_SESSION['attempt_again'];
					
				}
			else
			{

				//Initialize values for form
				$username = $_POST['username'];
				$password = $_POST['password'];
				//validate username andpasword 
				if (empty($username)) {
					echo "<div class='alert alert-danger' role='alert'>Username required</div>";
				}

				if (empty($password)) {
					echo "<div class='alert alert-danger' role='alert'>Password required</div>";
				}

				else {
					//queury to retrive username and paasword from database 
					$query = "SELECT * FROM users where username ='$username' AND password='$password'";
					$results = mysqli_query($connection, $query) or die("Query Failed".mysqli_error($connection));
					$row = mysqli_fetch_array($results);
					$num = mysqli_num_rows($results);
					
					//check matching login values
					if(($num==1)){

						$_SESSION['user'] = $row['id'];
						echo "<div class='alert alert-success' role='alert'>Loggedin successfully</div>";
						header("Location:inquiry/index.php");
						$_SESSION['attempt']=3;
					//Decrement number of attempts		
					}else{
							
						$_SESSION['attempt'] -=1;
						echo "<div class='alert alert-danger' role='alert'>Wrong username or password</br>Attempts left -".$_SESSION['attempt']."</div>";
						$_SESSION['attempt'];
						
							
						
					}
				}
			}
    	}
	}
	
	
	//register user
	function addUser(){
		
		//make connection accessible
		global $connection;
		global $hashed_password;
		
		if(isset($_POST['submit'])){
			
			//get form value
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$username =$_POST['username'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$date=$_POST['date'];
			$address =$_POST['address'];
			$postcode =$_POST['postcode'];
			
			//sanitize form values
			$firstname = mysqli_real_escape_string($connection, $firstname);
			$lastname = mysqli_real_escape_string($connection, $lastname);
			$username = mysqli_real_escape_string($connection, $username);
			$email = mysqli_real_escape_string($connection, $email);
			$password = mysqli_real_escape_string($connection, $password);
			$date = mysqli_real_escape_string($connection, $date);
			$address = mysqli_real_escape_string($connection, $address);
			$postcode = mysqli_real_escape_string($connection, $postcode);

			//validating firstname
			if($firstname == "" || $firstname == null)
			{
				echo "<div class='alert alert-danger' role='alert'>Firstname is required</div>";
			}
			else if(!preg_match('/^[a-zA-Z\s]+$/', $firstname))
			{
				echo "<div class='alert alert-danger' role='alert'>Firstname should contain letters only</div>";
			}
			else if(strlen($firstname) < 4)
			{
				echo "<div class='alert alert-danger' role='alert'>Firstname should contain more than 4 characters</div>";
			}
			
			//validating lastname

			if($lastname == "" || $lastname == null)
			{
				echo "<div class='alert alert-danger' role='alert'>Lastname is required</div>";
			}
			else if(!preg_match('/^[a-zA-Z\s]+$/', $lastname))
			{
				echo "<div class='alert alert-danger' role='alert'>Lastname should contain letters only</div>";
			}
			else if(strlen($lastname) < 4)
			{
				echo "<div class='alert alert-danger' role='alert'>Lastname should contain more than 4 characters</div>";
			}

			//validating username
			if($username == "" || $username == null)
			{
				echo "<div class='alert alert-danger' role='alert'>Username is required</div>";
			}
			else if(strlen($username) < 4)
			{
				echo "<div class='alert alert-danger' role='alert'>Username should contain more than 4 characters</div>";
			}

			//validating email field
			if($email == "" || $email == null)
			{
					echo "<div class='alert alert-danger' role='alert'>Email is required</div>";
			}
			else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
					echo "<div class='alert alert-danger' role='alert'>Invalid email</div>";
			}
			//validating password field
			if ($password == "" || $password == null)
      		{
         		echo "<div class='alert alert-danger' role='alert'>Password is required</div>";
			}
			//validating date of birth field  
			if ($date == "" || $date == null)
			  {
				 echo "<div class='alert alert-danger' role='alert'>Password is required</div>";
			}
			//validating address field
			if($address == "" || $address == null)
			{
			  echo "<div class='alert alert-danger' role='alert'>Address is required</div>";
			}
			//validating address field
			if($postcode == "" || $postcode == null)
			{
			   echo "<div class='alert alert-danger' role='alert'>Postcode is required</div>";
			}
			elseif (!preg_match('~[0-9]+~', $postcode))
			{
			   echo "<div class='alert alert-danger' role='alert'>Postcode has to contain digits only</div>"; 
			}
			
		
			
			 else{
				//retrieve usernam and password values
				$query="SELECT * FROM users where username='$username' AND password='$password'";

				$result=mysqli_query($connection, $query) or die("Query Failed". mysqli_error($connection));
				
				$num=mysqli_num_rows($result);
				//check if values are available in database
				if($num==0){
					
					//send values to database
					$query = "INSERT into users(firstname, lastname, username, email, password, date_of_birth, address, postcode) values 
							('$firstname','$lastname','$username','$email','$password','$date','$address','$postcode')";
					
					$result= mysqli_query($connection, $query) or die('Failed to create user'.mysqli_error($connection));
					
					//check if sending value to database query was successful
					if($result){
						
						echo "<div class='alert alert-success' role='alert'>Registered Successfully</div>";

					}
					else{
						
						echo "<div class='alert alert-danger' role='alert'>Registration Failed</div>";
						
					}
					
			
					
				}else{
					//notify of values already in database
					echo "<div class='alert alert-danger' role='alert'>Username and Password Already Taken</div>";
				}
			}
		}
	}




?>