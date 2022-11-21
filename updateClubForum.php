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

                        echo '

                        <div class="Club name">
                            <label for="id">Club id</label> <br>
                            <input type="text" name="id" id="id"" value='.$id.' readonly >
                        </div>

                            <!--  Update club name -->
                            
                            <div class="Club name">
                                <label for="name">Club name</label> <br>
                                <input type="text" name="Clubname" id="name" value="'.$name.'" required>
                            </div>
                            
                            <!-- Add club description -->
                            <div class="description">
                                <label for="description">Club description</label> <br>
                                <textarea name="Description" id="name" required>'.$description.'</textarea>
                            </div>

                            <!-- Add club image -->

                            <div class="image">
                                <label for="image">Club image</label> <br>
                                <input type="file" name="Image" id="name">
                            </div>

                            <div class="btns">
                                <input type="submit" id="submit" class="submit" value="Ajouter">
                                <a href="./dashboard_clubs.php"><button type="reset" class="submit" id="cancel" style="background-color:red; cursor: pointer;">Cancel </button></a>
                            </div>
                        '
                    
                    ?>
                    
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>