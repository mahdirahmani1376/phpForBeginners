<?php

$heading = 'Notes';
$notes = [];

$config = require 'config.php';
$db = new Database($config['database']);

$note = $db->query('SELECT * FROM notes where id = :id',['id' => $_GET['id']])->fetch();
require "views/notes.view.php";