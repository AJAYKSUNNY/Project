<?php 

 $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "ajayksunny";
    $db = "users";
 
     $em=$_POST["emm"];

     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
     if($conn)
     {
        
                 
         $sql="SELECT * FROM register";
         $result=mysqli_query($conn,$sql);
         if(mysqli_num_rows($result)>0)
         {
            while($row=mysqli_fetch_array($result))
            {
                $f=0;
                if($row["email"]==$em)
                {
                    $f=1;break;
                }
            }mysqli_free_result($result);
         }
         
         if($f==1)
         {
           
        
               ini_set( 'display_errors', 1 );
               error_reporting( E_ALL );
               $from = "ajayksunny999@gmail.com";
               $to = "ajayksunny3143@gmail.com";
               $subject = "Checking PHP mail";
               $message = "PHP mail works just fine";
               $headers = "From:" . $from;
               $re=mail($to,$subject,$message, $headers);
               if ($re==true)
                   {
                   echo "The email message was sent.";
                   }
               else{
                    echo "mail not send";
                   }
         }
         else
         {
           echo "No such Email is registered ";
         }
     }

    mysqli_close($conn);

?>