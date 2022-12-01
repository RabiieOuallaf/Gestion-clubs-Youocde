<?php

use LDAP\Result;

    require_once './backend/Module/Connection.php';
    session_start();

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
                        <li style="background: #212429;"><a href="./dashboard_statistique.php"><i class="fa-solid fa-chart-line"></i><span>Statistique</span></a></li>
                        <li><a href="./dashboard_membre.php"><i class="fa-solid fa-users"></i><span>Members</span></a></li>
                        <li><a href="./dashboard_clubs.php"><i class="fa-solid fa-house-user"></i><span>Clubs</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
    
        <section class="dashboard_header">

            <div class="dash_container">
                <div class="elements">
                    <div class="title">
                        <h4><span>D</span>ashboard</h4>
                    </div>
                    <div class="admin_icon">
                        <img src="./frontend/Sass/images/art 1.png" alt="" width="50px" class="admin">
                        <a href="./logout.php"><div class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></div></a>
                    </div>
                </div>
            </div>

            <div class="tableaux_membre">
                <h2 style="color: white; text-align: center;">
                    Welcome back 
                    <?php 
                        echo '<span style="color: #5EC2ED; text-transform: capitalize;">'.$_SESSION['UserName'];
                    ?>
                </h2>

                <div class="state">
                    <div class="state_admin">

                        <?php 
                            $admin = mysqli_query($conc, "SELECT * FROM admin");
                            $membres = mysqli_query($conc, "SELECT * FROM user");
                            $clubs = mysqli_query($conc, "SELECT * FROM clubs");
                            $countAdmin = mysqli_num_rows($admin);
                            $countMembres = mysqli_num_rows($membres);
                            $countClubs = mysqli_num_rows($clubs);

                            echo '<span>Total Admin : '.$countAdmin.' </span><i class="fa-solid fa-house-user"></i>';
                        ?>

                    </div>
                    <div class="state_membres">
                        <?php 
                            echo '<span>Total Membres : '.$countMembres.' </span><i class="fa-solid fa-users"></i>';
                        ?>
                    </div>
                    <div class="state_clubs">
                        <?php 
                            echo '<span>Total Clubs : '.$countClubs.' </span><i class="fa-solid fa-chart-line"></i>';
                        ?>
                    </div>
                </div>
                
            </div>

        </section>
        <div class="pop_up pop" id="pop_up">
            <div class="form">
                <form action="./backend/Module/addClubs.php" method="POST" enctype="multipart/form-data">

                    <!-- Add club name -->
                    <div class="Club name">
                        <label for="name">Club name</label>
                        <input type="text" name="Clubname" id="name" placeholder="Full name" required>
                    </div>
                    
                    <!-- Add club description -->
                    <div class="description">
                        <label for="description">Club description</label>
                        <textarea type="text" name="Clubdescription" id="name" placeholder="Description" required></textarea>
                    </div>

                    <!-- Add club image -->
                    <div class="image">
                        <label for="image">Club image</label>
                        <input type="file" name="Image" id="name" required>
                    </div>

                    <div class="btns">
                        <input type="submit" id="submit" class="submit" value="Ajouter">
                        <input type="reset" value="Cancel" class="submit" id="cancel" style="background-color:red; cursor: pointer;">
                    </div>


                </form>
            </div>
        </div>
    </div>


</body>
    <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    <script src="./frontend/js/addClub.js" type="module"></script>
</html>