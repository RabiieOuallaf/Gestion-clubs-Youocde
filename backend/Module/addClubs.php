<?php 

    include_once("Connection.php");

    // Fetch data

    $name = $_POST['Clubname'];
    $description = $_POST['Clubdescription'];
    $image = $_POST['Clubimage'];

    // Insert data into the data base

    $sqlAddClub = "INSERT INTO `CLUBS` (`Name` , `Description`, `Image`)
    values('$name', '$description','$image')";

    // Aplly SQL command to the database

    $Result = mysqli_query($conc, $sqlAddClub);

    // If the Command is applied seccussfuly do the following 

    if($Result){
        header('location: ../../dashboard_clubs.php');
    }else {
        echo "Error: " . $sqlAddClub . "<br>" . mysqli_error($conc);
    }

    


?>