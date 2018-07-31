<?php
    /* setcookie("user_name", "johnwash", time()+ 60,'/'); // expires after 60 seconds
     echo 'the cookie has been set for 60 seconds'."<br>";
       print_r($_COOKIE);
       setcookie("user_name", "johnwash", time() - 60,'/');*/
class Cookie {
	public static function exists($name) {
		return(isset($_COOKIE[$name])) ? true : false;
	}
	public static function get($name) {
		return $_COOKIE[$name];
	}
	public static function set($name, $value, $expiry) {
		if(setcookie($name, "", time() + $expiry, '/')) {
			return true;
		}
		return false;
	}
	public static function destroy($name) {
		self::put($name, '', time() -1);
	}
}
?>
