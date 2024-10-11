<?php
$conn = new mysqli("localhost", "root", "", "webtechlab");

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['user_ids'])) {
    $ids = implode(',', array_map('intval', $_POST['user_ids']));
    $sql = "DELETE FROM users WHERE id IN ($ids)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('User has been deleted successfully.');
            location.href = 'records.php';
            </script>";

            $conn->query("SET @count = 0");
            $conn->query("UPDATE users SET id = @count:= @count + 1");
            $conn->query("ALTER TABLE users AUTO_INCREMENT = 1");

    } else {
        echo "<script> 
            alert('Error deleting user.');
            location.href = 'records.php'
            </script>" . $conn->error;
    }
} else {
    echo "<script> 
        alert('No user selected.');
        location.href = 'records.php'
        </script>";
}

$conn->close();
?>
