<?php 
    include('config.php');
$cookie_name = "ACIA_CUP_2018";
$cookie_value = "http://localhost/asia%20cup%202018";
setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day

if(!isset ($_COOKIE[$cookie_name]))
 {
 header("Location: aciacup.php");
} 
else 
{
 header("Location: result.php");
}
?>
 