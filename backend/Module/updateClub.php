<?php 

    include_once("Connection.php");

    // fetch the data 

    $id = $_POST['id'];
    $name = $_POST['Name'];
    $description = $_POST['Description'];
    $Image = $_POST['Image'];



    // Sql command 
    $sqlUp = "UPDATE CLUBS SET `Name` = '$name',
                            `Description` = '$description',
                            `Image` = '$Image'
                            WHERE `Id` = '$id';";

    $result = mysqli_query($conc , $sqlUp);

    // redirect the user 

    if($result){
        header('Location: ../../dashboard_clubs.php');
    }else{
        echo 'Error!';
    }

?>