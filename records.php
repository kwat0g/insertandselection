<?php
    include('insert.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <a href="index.php" class="text-decoration-none">BACK</a>
        <form method="post" action="delete.php">
            <table class="table table-hover table-bordered">

                <h1 class="text-center">USER LIST</h1>

                <thead>
                    <td>SELECT</td>
                    <td>ID</td>
                    <td>FIRST NAME</td>
                    <td>LAST NAME</td>
                    <td>EMAIL</td>
                    <td>BIRTHDATE</td>
                </thead>

                <tbody>
                    <?php
                        $result = $db->query("SELECT id, firstname, lastname, email, bday FROM users");

                        if ($result->num_rows > 0) {

                            while($row = $result->fetch_assoc()) {
                                echo '<tr>
                                <td><input type="checkbox" name="user_ids[]" value="' . $row["id"] . '"></td>
                                <td>' . $row["id"] .        '</td>
                                <td>' . $row["firstname"] . '</td>
                                <td>' . $row["lastname"] .   '</td>
                                <td>' . $row["email"] .     '</td>
                                <td>' . $row["bday"] .      '</td>';
                            }
                        }else {
                                echo '<tr>
                                <td colspan="6" class="text-center">No data available</td>
                                </tr>';
                        }
                                
                    ?>
                </tbody>    
            </table>   

            <button class="btn btn-default btn-danger w-100">DELETE</button>

        </form> 
    </div>
</body>
</html>