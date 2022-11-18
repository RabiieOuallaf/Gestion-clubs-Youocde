<?php
    include_once("Connection.php");

    $name = $_POST['Name'];
    $class = $_POST['Class'];
    $email = $_POST['Email'];
    $club = $_POST['Club'];

    // try and catch => check if there is an erreur in code php

    $sql = "INSERT INTO `USER`(`Name`, `Class`, `Email`, `Club`) 
    VALUES ('$name','$class','$email','$club')";

    if (mysqli_query($conc, $sql)) {
        header('location: ../../dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conc);
    }

?>
