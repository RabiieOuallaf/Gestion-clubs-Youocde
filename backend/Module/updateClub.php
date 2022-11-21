<?php 

    include "Connection.php";

    // fetch the data 

    $id = $_POST['id'];
    $name = $_POST['Clubname'];
    $description = $_POST['Description'];
    
    
    $image_name = $_FILES['Image']['name'];
    $image_tmp = $_FILES['Image']['tmp_name'];
    $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_str_lower = strtolower($image_extension);
    $new_image_name = uniqid("IMG-", true).'.'.$image_str_lower;
    $image_upload_path = '../../upload/'.$new_image_name;
    move_uploaded_file($image_tmp, $image_upload_path);

    if (empty($image_name)) {
        $sqlUp = "UPDATE CLUBS SET `Clubname` = '$name',
                        `Description` = '$description',
                        WHERE `Id` = '$id';";
    }
    else {
        $sqlUp = "UPDATE CLUBS SET `Clubname` = '$name',
                        `Description` = '$description',
                        `Image` = '$new_image_name'
                        WHERE `Id` = '$id';";
    }

    // Sql command 
    $result = mysqli_query($conc , $sqlUp);

    // redirect the user 

    if($result){
        header('Location: ../../dashboard_clubs.php');
    }else{
        echo 'Error!';
    }

?>