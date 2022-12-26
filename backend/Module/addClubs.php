<?php 

    include_once("Connection.php");

    // Fetch data

    $name = $_POST['Club'];
    $description = $_POST['Clubdescription'];

    $image_name = $_FILES['Image']['name'];
    $image_tmp = $_FILES['Image']['tmp_name'];
    $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_str_lower = strtolower($image_extension);
    $new_image_name = uniqid("IMG-", true).'.'.$image_str_lower;
    $image_upload_path = '../../upload/'.$new_image_name;
    move_uploaded_file($image_tmp, $image_upload_path);


    // Insert data into the data base

    
    $sqlAddClub = "INSERT INTO `CLUBS` (`Clubname` , `Description`, `Image`)
                values ('$name', '$description','$new_image_name');";

    // Aplly SQL command to the database

    $Result = mysqli_query($conc, $sqlAddClub);

    // If the Command is applied seccussfuly do the following 
    

    if($Result){
        header('location: ../../dashboard_clubs.php');
    }else {
        echo "Error: " . $sqlAddClub . "<br>" . mysqli_error($conc);
    }

    


?>