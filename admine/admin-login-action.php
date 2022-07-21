<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
        include_once("db.php");
        $email = $_POST['email'];
        $password = $_POST['password'];

       // echo("$email"."<br>"."$password");
       
       
        $deta = 'select * from admin where email="'.$_POST["email"].'"';
        $result = mysqli_query($conn,$deta);
        if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_array($result);
                if($row["password"]!=$_POST["password"]){
                        header("location:admin-login.php?error=Password_does_not_match");
                       
                } else {
                        session_start();
                        $_SESSION["sessdata"]=$row;
                        header("location:home.php");
                }
                
        } else {
                header("location:admin-login.php?error=Invalid_Email_ID");
               
        }
}


?>