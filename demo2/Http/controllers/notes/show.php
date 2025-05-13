<?php


use Core\Database;
use Core\App;
$db = App::resolve(Database::class);
$current_user = 1;

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    $note = $db->query('SELECT * FROM notes where id = :id' , [
        ':id'=>$_GET['id'],
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
}
else{

    $greeting = "Note";


    $note = $db->query('SELECT * FROM notes where id = :id' , [
        ':id'=>$_GET['id'],
    ])->findOrFail();
//dd($notes);

    authorise($note['user_id'] === $current_user);


    view ("notes/show.view.php",
        [
            'greeting' => $greeting,
            'note' => $note,
        ]);
}
