<?php
    include_once("Connection.php");

    $name = $_POST['FullName'];
    $class = $_POST['Class'];
    $email = $_POST['Email'];
    $club = $_POST['Club'];
    $id = $_POST['Id'];

    // $regEx = '/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';

    // try and catch => check if there is an erreur in code php

    // if (preg_match($regEx, $description)) {
        
    // }


    $sql = "INSERT INTO `USER`(`FullName`, `Class`, `Email`, `Club`)
    VALUES ('$name','$class','$email','$club')";

    if (mysqli_query($conc, $sql)) {
        header('location: ../../dashboard_membre.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conc);
    }

?>
