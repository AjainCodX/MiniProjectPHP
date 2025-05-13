<?php
$greeting = "My Notes";


use Core\Database;
use Core\App;;
//$config = require base_path("config.php");
//
//
//$db = new  Database($config['database']);
$db = App::resolve(Database::class);

$notes = $db->query('SELECT * FROM notes where user_id = 1')->get();
//dd($notes);

 view("notes/index.view.php",
 [
     'greeting' => $greeting,
     'notes' => $notes
 ]
 );