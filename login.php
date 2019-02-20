<?php 

 $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "ajayksunny";
    $db = "users";
 
 
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
     if($conn)
     {
     	$username1=$_POST["usrnm"];
         $psd1=$_POST["psd"];
         $sql="SELECT * FROM register";
         $result=mysqli_query($conn,$sql);
         if(mysqli_num_rows($result)>0)
         {
         	while($row=mysqli_fetch_array($result))
         	{
         		$f=0;
                
         		if(($row["username"]==$username1) && ($row["password"]==$psd1))
         		{
         			$f=1;break;
         		}
         	}mysqli_free_result($result);
         }
         
         if($f==1)
         {
         	echo "Login Successfull";echo"<br><br>";echo "<h1>welcome</h1>";
            echo "<br><br><br>";
            echo"NAME:"; echo  $row["name"];echo"<br><br>";
            echo"USERNAME:"; echo $row["username"];echo"<br><br>";
            echo"PASSORD:"; echo $row["password"];echo"<br><br>";
            echo"EMAIL:"; echo $row["email"];echo"<br><br>";
            echo"NUMBER:"; echo $row["numberr"];echo"<br><br>";
            echo"GENDER:"; echo $row["gender"];echo"<br><br>";
         }
         else
         {
           echo "invalid login";
         }
     }

?>