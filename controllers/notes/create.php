<?php

require 'Validator.php';

$config = require base_path('config.php');
$errors = [];
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (! Validator::string($_POST['body'],1,1000)){
        $errors['body'] = 'A body with less than 1000 characters is required';
    }

    if (empty($errors)){
        $db->query('INSERT into myApp.notes(body, user_id) values (:body, :user_id)',[
            'body' => htmlspecialchars($_POST['body']),
            'user_id' => 1,
        ]);
    }

}
view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);