<?php
    
    include('assets/includes/header.php');
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "driverless";

    //Connecting to database
    $connection = mysqli_connect($hostname, $username, $password); 

    // Check connection
    if (!$connection) {
        
        echo "Failed to connect to database".mysqli_connect_error()."</br>";
        exit();
    }

    if (mysqli_select_db($connection,$dbname)){

        echo "<div class='alert alert-danger' role='alert'>Database Already Created</div></br>";
    
    }else{


        // Creating and executing the query for creating database
        $query = "CREATE DATABASE IF NOT EXISTS ".$dbname;
        $result = mysqli_query($connection, $query);

        //Checking errors in the query
        if($result){

            echo "<div class='alert alert-success' role='alert'>Database Created Successfully</div>";

        }else{

            echo "Failed to create database: ". mysqli_error($connection)."<br>";
    
        }

        // Selecting the created database
        mysqli_select_db($connection,$dbname);

        //Creating Users Table
        $query = "CREATE TABLE IF NOT EXISTS
        users(`id` INT(11) NOT NULL AUTO_INCREMENT, 
            `firstname` VARCHAR(45) NOT NULL,
            `lastname` VARCHAR(45) NOT NULL,
            `username` VARCHAR(45) NOT NULL,
            `email` VARCHAR(45) NOT NULL,
            `password` VARCHAR(255) NOT NULL,
            `date_of_birth` VARCHAR(45) NOT NULL,
            `address` VARCHAR(255) NOT NULL,
            `postcode` VARCHAR(45) NOT NULL,
            PRIMARY KEY (`id`))";

        $result = mysqli_query($connection, $query);


        //checking errors in the users table create query
        if($result){

            echo "<div class='alert alert-success' role='alert'>Users table created Successfully</div>";

        }else{

            echo "Failed to create table users : ". mysqli_error($connection)."<br>";

        }
        
        //Creating Inquiries Table
        $query = "CREATE TABLE IF NOT EXISTS
        inquiries(`id` INT(11) NOT NULL AUTO_INCREMENT, 
            `name` VARCHAR(45) NOT NULL,
            `email` VARCHAR(45) NOT NULL,
            `phone_no` VARCHAR(45),
            `subject` VARCHAR(45) NOT NULL,
            `message` TEXT NOT NULL,
            `user_id` INT(11) NOT NULL,
            PRIMARY KEY (`id`),
            FOREIGN KEY(`user_id`) REFERENCES users(`id`))";

        $result = mysqli_query($connection, $query);
        
         //checking errors in the inquiries table create query
         if($result){

            echo "<div class='alert alert-success' role='alert'>Inquiries table created Successfully</div></br>";

        }else{

            echo "Failed to create table inquiries : ". mysqli_error($connection)."<br>";

        }
        
    }


    echo "<div class='wrap-btn-booking flex-c-m m-t-13 p-b-50 p-t-10'>
    
            <a href='index.php'>
                <button type='submit' class='btn3 flex-c-m size36 txt11 trans-0-4'>
                    Contiue
                </button>
            </a>

        </div>";

    
    include('assets/includes/footer.php');

?>

    

