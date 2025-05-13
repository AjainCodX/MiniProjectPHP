<?php

// login the user if the credentials match

use Core\Validator;
use Core\Database;
use Core\App;
use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;
use Core\ValidationException;

$db = App::resolve(Database::class);


$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['password']);

if (!$signedIn) {
    $form->error('email', 'No matching account found for that email address and password.')
        ->throw();

}

redirect("/");



//return view('sessions/create.view.php',
//    [
//        'errors' => $form->errors()
//    ]
//);

//return view('sessions/create.view.php', [
//    'errors' => [
//        'email' => ''
//    ]
//]);

// we have a user, but we don't know if the password provided matches what we have in the database.

