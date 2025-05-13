<?php


use Core\Database;

use Core\App;

//$config = require base_path("config.php");
//$db = new Database($config['database']);

//$db = App::resolve(Database::class);
$db = App::Container()->resolve('Core\Database');
$current_user = 1;


$note = $db->query('SELECT * FROM notes where id = :id', [
    ':id' => $_GET['id'],
])->findOrFail();
//dd($notes);

authorise($note['user_id'] === $current_user);
//form was submitted delete the current note.
$db->query('delete from notes where id = :id',
    [
        "id" => $_GET['id']
    ]
);

header('Location: /notes');
exit();
