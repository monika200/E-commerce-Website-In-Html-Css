<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$servername="localhost";
$username="root";
$password="";
$dbname="vishwas";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
else
{
  	$query="SELECT * from `data` where `email`= '$email' AND `password`= '$pass';"; 
         $result= mysqli_query($conn,$query);
         if (mysqli_num_rows($result)>0)
          {$_SESSION['email']=$email;
               $_SESSION['pass']=$pass;
             while($row=mysqli_fetch_assoc($result))
             {
                  echo "<script>alert('Welcome user');
        window.location.href='home.html'</script>";
             }
                         
         }

         else{
           echo "<script>alert('invalid username or password');
        window.location.href='login.html'</script>";
         }

}
mysqli_close($conn);
?>
