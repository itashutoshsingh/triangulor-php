<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $coures = $_POST['coures'];
        $message = $_POST['message'];

        $conn = mysqli_connect("localhost","root","","tri-contact");
        if(!$conn){
            die("sorry we are Faild". mysquli_connect_error());
        }
        else{
            echo("connection was sucessfull.");
        }

        $deta = 'INSERT INTO `full_detail` (`Name`, `Email`, `Phone No`, `Course`, `Text-Area`) VALUES ("'.$name.'", "'.$email.'", "'.$phone_number.'", "'.$coures.'", "'.$message.'")';
        $result = mysqli_query($conn,$deta);
        if($result){
            echo("Your data is  successfully save.");
        } 
        else{
            echo("Your data is not successfully save.");
        }
}


?>