<?php
	session_start();

	include('db-connection.php');
	//edit user
	function editUser(){
		
		//make connection accessible
		global $connection;
		
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
		
			//validate values	
		if((empty($firstname)) || (empty($lastname)) || (empty($username)) || (empty($email)) || (empty($password)) || (empty($password)) || (empty($address)) || (empty($postcode))){
				
					
				echo "<div class='alert alert-danger' role='alert'>All fields are required</div>";
		
		}
		
		else{

					//update values in database
					$query = "UPDATE users SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$password', date_of_birth='$date', address='$address', postcode='$postcode' WHERE id='".$_SESSION['user']."'";
					
					$result= mysqli_query($connection, $query) or die('Failed to update user'.mysqli_error($connection));
					
					//check if sending value to database query was successful
					if($result){

							
						echo "<div class='alert alert-success' role='alert'>Profile Updated Successfully</div>";
						header('Refresh:3,edit-user.php#edit');
						

					}
					else{
						
						echo "<div class='alert alert-danger' role='alert'>Updating Profile Failed - Username Already Exists</div>";
						
					}
		}
			
	
	}
	

}
 
function addInquiry(){

	global $connection;
		
	if(isset($_POST['faq-submit'])){
	
		$faq_name = $_POST['faq-name'];
		$faq_email = $_POST['faq-email'];
		$faq_phone = $_POST['faq-phone'];
		$faq_subject = $_POST['faq-subject'];
		$faq_message = $_POST['faq-message'];
		
		
		$faq_name = mysqli_real_escape_string($connection, $faq_name);
		$faq_email = mysqli_real_escape_string($connection, $faq_email);
		$faq_phone = mysqli_real_escape_string($connection, $faq_phone);
		$faq_subject = mysqli_real_escape_string($connection, $faq_subject);
		$faq_message = mysqli_real_escape_string($connection, $faq_message);
		
		if((empty($faq_name)) || (empty($faq_email)) || (empty($faq_phone)) || (empty($faq_subject)) || (empty($faq_message))){
				
				echo "<div class='alert alert-danger' role='alert'>All fields are required</div>";

		}else{
		
				$query = "INSERT INTO inquiries(name, email, phone_no, subject, message,user_id) VALUES('$faq_name','$faq_email','$faq_phone','$faq_subject','$faq_message','".$_SESSION['user']."')";
				
				$result = mysqli_query($connection, $query);
				
				if($result){

					echo "<div class='alert alert-success' role='alert'>Your Question has been sent</div>";

				}else{
					
					die('Failed to send inquiry'.mysqli_error($connection));
					
				}
				
		}
	
	}



}
	
	
	
    
	//validate question
    function validateQuestion()
    {
        
        if($question == "" || $question == null)
        {
            echo 'Question field cannot be empty ';
        }
        
    }

    


//validating email field

	function validateEmail()
	{
       
       if($email == "" || $email == null)
       {
         	echo 'email is required';
       }
       else if (!filter_var($email, FILTER_VALIDATE_EMAIL));
       {
        	echo 'invalid email';
       }
    }






  //validating  phone number
	function validatePhoneNo()
	{

      if($phone == "" || $phone == null)
      {
        echo 'Phone number is required';
      }
      elseif (!preg_match('~[0-9]+~', $phone)) {

        echo 'Phone number has to contain digits only'; 
      }
      
  }

  


	//validating subject
	function validatSubject()
	{
      
      if($subject =="" || $subject == null)
      {
        echo 'subject is required';
      }
      
    }
?>