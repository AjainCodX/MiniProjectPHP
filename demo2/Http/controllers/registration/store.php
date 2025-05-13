<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];


// validate the form input

$errors = [];

if(!Validator:: email($email)){
    $errors['email'] = 'Please enter a valid email address';
}

if(!Validator:: string($password, 7,255)){
    $errors['password'] = 'Please provide a password of at least seven characters';
}

if(!empty($errors)){
    return view('registration/create.view.php',
        [
            'errors' => $errors
        ]
    );
}


// check if the account already exist
    // If yes redirect to the login page
    // save one to the database band log the user in and redirect



$user = $db->query('select * from users where email = :email',[
    'email' => $email
])->find();

if($user)
{
    header("location: ");
    exit();
}else{
    $db->query('insert into users (email, password) values (:email, :password)',[
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    login($user);
    header("location: /");
    exit();
}

