<?php

use Core\Session;
use Core\ValidationException;
session_start();
const BASE_PATH = __DIR__.'/../';


require(BASE_PATH . "Core/functions.php");
require BASE_PATH . "/vendor/autoload.php";

require base_path('bootstrap.php');
$router = new \Core\Router();

$routes =require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri,$method);
}catch(ValidationException $exception){
    Session::flash('errors', $exception->errors());
    Session::flash('old', [
        'email' => $_POST['email'],
    ]);
    return redirect($router->previousUrl());

}



// connect to mySQL database and execute a query.

Session::unflash();
//dd($_GET);
//$id = $_GET['id'];

//$query = "select * from posts where id = :id";
//dd($query);
//$posts = $db->query($query ,[':id' => $id])->fetch();
//dd($posts);
//foreach ($posts as $post) {
//    echo "<li>" . $post['title'] . "</li>";
//}

//class Person{
//    public $name;
//    public $age;
//
//    public function breathe(){
//        echo $this->name. "is breathing";
//    }
//}
//
//$person = new Person();
//$person->name = "John Doe";
//$person->age = 25;
//dd($person->breathe());