<?php



$greeting = "Create Note";
$errors = [];


//dd(Validator::email('dddddddd@gmail.com'));


view('notes/create.view.php',
[
    'greeting' => $greeting,
    'errors' => $errors,
]);