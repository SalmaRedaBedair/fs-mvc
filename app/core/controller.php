<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;
class controller{
    public function view($path,$param){
        extract($param); // this function make keys variable names and value is variable value 
        require_once(VIEWS.$path.'.php');
    }
    public function dp(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'todo-list',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => '127.0.0.1',
            'port' => '3306'
        ];
        return $dp = new Database($options);
    }
}
?>