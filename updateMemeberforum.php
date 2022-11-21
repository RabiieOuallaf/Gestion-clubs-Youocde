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
                <form action="./backend/Module/updateMemeber.php" method="POST">

                    <?php 

                        // Get memeber informations 
                        
                        $Name = $_GET['updateName'];
                        $email = $_GET['updateEmail'];
                        $class = $_GET['updateClass'];
                        $club = $_GET['updateClub'];
                        $id = $_GET['updateid'];

                        


                        // Get memeber id 

                        $sql = "SELECT * FROM USER WHERE Id = '.$id.'";
                        
                        $Result = mysqli_query($conc , $sql);
                        




                        echo '
                            
                        <div class="name">
                            <label for="Id">Id</label> <br>
                            <input type="text" name="Id" id="id" value="Member Id : '.$id.'" value='.$id.' readonly>
                        </div>
                        <div class="name">
                            <label for="name">Name</label> <br>
                            <input type="text" name="Name" id="name" value="Full name : '.$Name.'" required>

                        </div>
                        <div class="class">
                            <label for="class">Class</label> <br>
                            <input type="text" name="Class" id="class" value="Class name : '.$class.'" required>
                        </div>
                        <div class="email">
                            <label for="email">Email</label> <br>
                            <input type="email" name="Email" id="email" value="Email : '.$email.'" required>
                        </div>
                        <div class="club">
                            <label for="club">Club</label> <br>
                            <input type="text" name="Club" id="club" value="Club name : '.$club.'" required>
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