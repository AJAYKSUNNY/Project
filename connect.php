<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "ajayksunny";
    $db = "users";
 
 
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
     if($conn)
     {
    
      
         $name=$_POST["nm"];
         $username=$_POST["unm"];
         $psd=$_POST["pd"];
         $mail=$_POST["em"];
         $number=$_POST["num"];
         if($_POST ["gd"]=='m')
         {
            $gender="Male";
         }
         else if($_POST ["gd"]=='f')
         {
            $gender="Female";
         }
         else
         {
            $gender="Other";
         }
         $sql="INSERT INTO register(name,username,password,email,numberr,gender) VALUES ('$name','$username','$psd','$mail','$number','$gender')";
         $query=mysqli_query($conn,$sql);
         if($query)
         {
            echo "\n\nData inserted Successfully";
            header('Location:loginpage.html');
         }
         else
         {
            echo "Data inertion Error";
         }
       
     }
     else
     {
      echo "Connection Failure";
     }
     mysqli_close($conn); 
 ?>