<?php 
// Database configuration constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); 
define('DB_PASSWORD', '');
define('DB_NAME', 'blog_post');

// Create database connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
