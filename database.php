<!-- database.php -->
<?php
function connectToDatabase() {
    // Simulate database connection
    $db = mysqli_connect('localhost', 'username', 'password', 'database_name');

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db;
}

function closeDatabaseConnection($db) {
    // Close the database connection
    mysqli_close($db);
}
?>
