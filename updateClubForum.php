<?php

    require_once './backend/Module/Connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./frontend/Sass/main.css">
    <title>Dashboard</title>
</head>
<body>
    
    <div class="body">

        <div class="pop_up " id="pop_up" style="display : block">
            <div class="form">
                <form action="./backend/Module/updateClub.php" method="POST" enctype="multipart/form-data">

                    <?php 
                        // Get memeber informations 
                        $name = $_GET['updateName'];
                        $description = $_GET['updateDescription'];
                        $image = $_GET['updateImage'];
                        $id = $_GET['updateid'];

                        $sql = "SELECT * FROM clubs";

                        $result = mysqli_query($conc, $sql);

                        echo '

                        <div class="Club id" style="display:none;">
                            <label for="id">Club id</label>
                            <input type="number" name="id" id="id"" value="'.$id.'" readonly >
                        </div>

                            <!--  Update club name -->
                            
                            <div class="Club name">
                                <label for="name">Club name</label>
                                <select name="Club" id="club" required>
                                    <optgroup label="Clubs" focused>
                                        '; 
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $row['Clubname'] . '"> '.$row['Clubname'] .'</option>';
                                        }
                                        echo '
                                    </optgroup>
                                </select>
                            </div>
                            
                            <!-- Add club description -->
                            <div class="description">
                                <label for="description">Club description</label>
                                <textarea name="Description" id="name" required>'.$description.'</textarea>
                            </div>

                            <!-- Add club image -->

                            <div class="image">
                                <label for="image">Club image</label>
                                <input type="file" name="Image" id="name">
                            </div>

                            <div class="btns">
                                <input type="submit" id="submit" class="submit" value="Ajouter">
                                <a href="./dashboard_clubs.php"><button value="Cancel" class="submit" id="cancel" style="background-color:red; cursor: pointer;">Cancel</button></a>
                                </div>
                        '
                    
                    ?>
                    
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>