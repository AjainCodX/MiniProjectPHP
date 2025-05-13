<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id',
    [
        'id' =>$_POST['id']
    ])->findOrFail();

authorise($note['user_id'] === $currentUserId);

$error = [];

if (!Validator::string($_POST['body'], 1, 500)) {
    $errors['body'] = "A body of no more than 1000 characters is required";
}


if (!empty($errors)) {
    return view('notes/edit.view.php',
        [
            'greeting' => 'Edit Note',
            'errors' => $errors,
            'note' => $note
        ]);
}
$db->query('update notes set body = :body where id = :id', [
    'body' => $_POST['body'],
    'id' => $note['id']
]);

header('location: /notes');
die();
