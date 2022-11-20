<?php 

    include_once("Connection.php");

    // Check if there is an id of the delted item 
    
    if(isset($_GET['deletedid'])){

        // Create a variable to hold the value of the id 

        $id = $_GET['deletedid'];

        // Wrie the sql command 

        $sql = "DELETE FROM `User` WHERE Id=$id";
        
        // Apply changes to the data base 

        $Result = mysqli_query($conc, $sql);

        if($Result){
            header("Location: ../../dashboard.php");
        }else {
            echo "Erorr!";
        }

    }

?> 