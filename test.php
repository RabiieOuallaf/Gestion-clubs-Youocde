<?php
    include_once("./Module/Connection.php");
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

        $sql = "SELECT * FROM ADMIN;";
        $result = mysqli_query($conc, $sql);
        $checkResult = mysqli_num_rows($result);

        if($checkResult > 0){
            while($rows = mysqli_fetch_assoc($result)){
                echo $rows[0];
            }
        }

    ?>
</body>
</html>