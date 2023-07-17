<?php 
namespace MVC\models;
use MVC\core\model;
use PDO;

class user extends model{
    public function GetAllUsers(){
        $data = model::db()->run("SELECT * FROM user")->fetchAll();
        return $data;
    }
    public function GetUser($email,$password){
        $data = model::db()->run("SELECT * FROM user")->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function Insert($data){
        extract($data);
        $id = model::db()->insert('user', ['email' => "$email", 'name' => "$name", 'user_name' =>"$username", 'password'=>"$password"]);
        return $id;
    }
}

?>