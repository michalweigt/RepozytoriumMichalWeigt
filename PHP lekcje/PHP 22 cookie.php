<?php
    $cookie_name ="user";
    $cookie_value ="John Doe";
    setcookie($cookie_name, $cookie_value, time() + (24*60*60) ); // 1 day
?>

<?php
    $cookie_name = "user";
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
   
    } else {
        echo "Cookie '" .$cookie_name . "' is set! <br>";
        echo "Value is: ".$_COOKIE[$cookie_name];
    }
?>

<?php
    // set the expiration date to one hour ago
    setcookie("user","",time() - 3600);
?>