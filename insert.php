<?php

    $db = new mysqli('localhost', 'root', '', 'webtechlab');

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $bday = $_POST['bday'];

        $sql = "INSERT INTO users (firstname, lastname, email, bday) VALUES ('$firstname', '$lastname', '$email', '$bday')";

        if($db->query($sql) == TRUE) {
            echo "<script> 
            alert('DATA HAS BEEN ADDED.'); 
            window.location.href = window.location.href;
            </script>";
        } 
    }
    
?>