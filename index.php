<?php

require 'functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';

$config = require 'config.php';
$db = new Database($config['database']);

$id = $_GET['id'];
$query = 'SELECT * FROM posts WHERE id = ?';
$posts = $db->query('select * from posts',[$id])->get();

foreach ($posts as $post) {
    echo "<li>". $post['title'] ."</li>";
}