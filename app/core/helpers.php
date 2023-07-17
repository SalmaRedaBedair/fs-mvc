<?php
namespace MVC\core;
class helpers{
    public static function redirect($path){
        header("LOCATION: http://mvc.test/".$path);
    }
}
?>