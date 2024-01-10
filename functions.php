<!-- functions.php -->
<?php
function getUsers($db) {
    // Simulate fetching users from the database
    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);

    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    return $users;
}

function displayUsers($users) {
    // Display user data
    echo "<h2>Users:</h2>";
    echo "<ul>";
    foreach ($users as $user) {
        echo "<li>{$user['username']} - {$user['email']}</li>";
    }
    echo "</ul>";
}
?>
