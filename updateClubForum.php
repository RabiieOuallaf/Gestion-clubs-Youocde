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
                <form action="./backend/Module/updateClub.php" method="POST">

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
                                <input type="text" name="Name" id="name" value="Club name : '.$name.'" required>
                            </div>
                            
                            <!-- Add club description -->
                            <div class="description">
                                <label for="description">Club description</label> <br>
                                <input type="text" name="Description" id="name" value="Club Description : '.$description.'" required>
                            </div>

                            <!-- Add club image -->

                            <div class="image">
                                <label for="image">Club image</label> <br>
                                <input type="text" name="Image" id="name" value="group image : '.$image.'" required>
                            </div>

                            <div class="btns">
                                <input type="submit" id="submit" class="submit" value="Ajouter">
                                <button class="submit" id="cancel" style="background-color:red; cursor: pointer;">Cancel</button>
                            </div>
                        '
                    
                    ?>
                    
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>