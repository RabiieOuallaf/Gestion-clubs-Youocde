<?php 

    include_once("Connection.php");

    $id = $_POST['Id'];
    $name = $_POST['Name'];
    $class = $_POST['Class'];
    $email = $_POST['Email'];
    $club = $_POST['Club'];


    // Sql command 
    $sql = "UPDATE USER SET `FullName` = '$name',
                            `Class` = '$class',
                            `Club` = '$club',
                            `Email` = '$email'
                            WHERE `Id` = $id;";

    $result = mysqli_query($conc , $sql);

    if($result){
        header('Location: ../../dashboard_membre.php');
    }else{
        echo 'Error!';
    }

?>