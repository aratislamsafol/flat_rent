<?php 
class Cookies{
    public static function init($name,$value){
        if(!isset($_COOKIE['$name'])){
            setcookie($name,$value,time()+3600*24,'/',false);
        }else{
            return false;
        }
    }

    public static function get($name){
        if(isset($_COOKIE[$name])){
            return $_COOKIE[$name];
        }else{
            return false;
        }
    }

    public static function destroy($name){
        if(isset($_COOKIE[$name])){
            setcookie($name,$value,time()-3600*24,'/',false);
        }else{
            setcookie($name,'',time()-3600*24,'/',false);
        }
    }
}
    
?>