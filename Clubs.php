<?php
    require_once './backend/Module/Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./frontend/Sass/main.css">
    <title>Dashboard</title>
</head>
<body>
    
    <div class="body">
        <section class="dashboard_bar">
            <div class="dash_container">
                <div class="logo">
                    <a href="./index.php"><img src="./frontend/Sass/images/logo.png" alt=""></a>
                </div>
                <div class="manage">
                    <ul>
                        <li><img src="./frontend/Sass/images/🦆 icon _people outline_.png" alt="" width="30px"><span>Members</span></li>
                        <li><img src="./frontend/Sass/images/🦆 icon _home outline_.png" alt="" width="30px"><span>Clubs</span></li>
                    </ul>
                </div>
            </div>
        </section>
    
        <section class="dashboard_header">

            <div class="dash_container">
                <div class="elements">
                    <div class="title">
                        <h4><span>M</span>embers</h4>
                    </div>
                    <div class="admin_icon">
                        <img src="./frontend/Sass/images/🦆 icon _search outline_.png" alt="">
                        <img src="./frontend/Sass/images/🦆 icon _bell outline_.png" alt="">
                        <img src="./frontend/Sass/images/art 1.png" alt="" width="50px" class="admin">
                        <img src="./frontend/Sass/images/🦆 icon _log out_.png" alt="">
                    </div>
                </div>
            </div>

            <div class="tableaux_membre">
                <div class="add" id="btn_add"><img src="./frontend/Sass/images/🦆 icon _plus_.png" alt=""></div>

                <!-- table membres -->
                <?php 
                    // try and catch => check if there is an erreur in code php
                    $sql = "SELECT * FROM clubs";
                    $result = mysqli_query($conc, $sql);
                    $checkResult = mysqli_num_rows($result);
                    if($checkResult > 0){
                        echo '<table>
                            <tr>
                                <th>Names</th>
                                <th>Descriptions</th>
                                <th>Images</th>
                                <th>Actions</th>
                            </tr>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            
                            echo '<tr>
                                <td><span>'.$row['Name'].'</span></td>
                                <td>'.$row['Description'] .'</td>
                                <td>'.$row['Image'].'</td>
                                <td>
                                    
                                    <button><a href="./updateClubForum.php?updateid='.$row['Id'].'&updateName='.$row['Name'].'&updateDescription='.$row['Description'].'&updateImage='.$row['Image'].' "> Update </a><i class="fa-regular fa-pen-to-square"></i></button>
                                    <button><a href="./backend/Module/deleteClub.php?deletedid='.$row['Id'].'" >Delete</a><i class="fa-solid fa-trash"></i></button>
                                     
                                </td>
                            </tr>';
                        }
                        echo '</table>';
                    } else {
                        echo "tableaux vide";
                    }
                ?>
            </div>
        </section>
        <div class="pop_up pop" id="pop_up">
            <div class="form">
                <form action="./backend/Module/addClubs.php" method="POST">
                    <!-- Add club name -->
                    <div class="Club name">
                        <label for="name">Club name</label> <br>
                        <input type="text" name="Clubname" id="name" placeholder="Full name" required>
                    </div>
                    
                    <!-- Add club description -->
                    <div class="description">
                        <label for="description">Club description</label> <br>
                        <input type="text" name="Clubdescription" id="name" placeholder="Description" required>
                    </div>

                    <!-- Add club image -->

                    <div class="image">
                        <label for="image">Club image</label> <br>
                        <input type="text" name="Clubimage" id="name" placeholder="opload image" required>
                    </div>

                    <div class="btns">
                        <input type="submit" id="submit" class="submit" value="Ajouter">
                        <button class="submit" id="cancel" style="background-color:red; cursor: pointer;">Cancel</button>
                    </div>


                </form>
            </div>
        </div>
    </div>

</body>
    <script src="./frontend/js/addClub.js" type="module"></script>
</html>