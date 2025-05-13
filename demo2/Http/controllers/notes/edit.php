<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);
$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id',
[
    'id' =>$_GET['id']
])->findOrFail();

authorise($note['user_id'] === $currentUserId);

view ("notes/edit.view.php",
    [
        'greeting' => 'Edit note',
        'errors' => [],
        'note' => $note,
    ]);