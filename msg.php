<?php
session_start();
$a=$_SESSION['nam5'];
$d=$_SESSION['nam3'];
$_SESSION['nam3']=$d;
$mobile="$a";
$message="Thankyou,your order is successfully placed.Speak to Akash deep(8873994343) for help.";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8873994343&Password=*****&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=enter your key") ,true);
if ($json["status"]==="success") {
    echo "<script>
        window.location.href='mail.php'</script>";
    //your code when send success
}else{
   echo "<script>
        window.location.href='mail.php'</script>";
    //your code when not send
}
?>
     