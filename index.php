<!-- index.php -->
<?php
require_once 'functions.php';
require_once 'database.php';

// Connect to the database
$db = connectToDatabase();

// Display a welcome message
echo "<h1>Welcome to our Web Application</h1>";

// Fetch and display some data from the database using a function from functions.php
$users = getUsers($db);
displayUsers($users);

// Close the database connection
closeDatabaseConnection($db);
?>
