<?php
    include_once("Connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <?php 

        // try and catch => check if there is an erreur in code php
        try {
            $sql = "SELECT * FROM USER";
            $result = mysqli_query($conc, $sql);
            $checkResult = mysqli_num_rows($result);
            if($checkResult > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['FName']. $row['LName']. $row['Password'];
                }
                echo "tableaux plein";
            } else {
                echo "tableaux vide";
            }
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }

    ?>
</body>
</html>