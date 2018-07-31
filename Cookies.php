<?php
     setcookie("user_name", "johnwash", time()+ 60,'/'); // expires after 60 seconds
     echo 'the cookie has been set for 60 seconds'."<br>";
       print_r($_COOKIE);
       setcookie("user_name", "johnwash", time() - 60,'/');
?>