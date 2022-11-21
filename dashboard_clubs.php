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
                        <li><a href="./dashboard_membre.php"><img src="./frontend/Sass/images/🦆 icon _people outline_.png" alt="" width="30px"><span>Members</span></a></li>
                        <li style="background: #212429;"><a href="./dashboard_clubs.php"><img src="./frontend/Sass/images/🦆 icon _home outline_.png" alt="" width="30px"><span>Clubs</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
    
        <section class="dashboard_header">

            <div class="dash_container">
                <div class="elements">
                    <div class="title">
                        <h4><span>C</span>lubs</h4>
                    </div>
                    <div class="admin_icon">
                        <img src="./frontend/Sass/images/🦆 icon _bell outline_.png" alt="">
                        <img src="./frontend/Sass/images/art 1.png" alt="" width="50px" class="admin">
                        <img src="./frontend/Sass/images/🦆 icon _log out_.png" alt="">
                    </div>
                </div>
            </div>

            <div class="tableaux_membre">
                <div class="add" id="btn_add"><img src="./frontend/Sass/images/🦆 icon _plus_.png" alt=""></div>
                <div class="table_club">
                    <!-- table membres -->
                    <?php 
                        // try and catch => check if there is an erreur in code php
                        $sql = "SELECT * FROM clubs";
                        $result = mysqli_query($conc, $sql);
                        $checkResult = mysqli_num_rows($result);

                        if($checkResult > 0){
                            echo '<div class="club">';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '
                                    <div class="club_container">
                                        <div class="club_img">
                                            <img src="./upload/'.$row['Image'].'" alt="club img" style="width: 200px">
                                        </div>
                                        <div class="club_info">
                                            <h3>'.$row['Clubname'].'</h3>
                                            <p>'.$row['Description'] .'</p>
                                            <div class="club_btn">
                                                <a href="./updateClubForum.php?updateid='.$row['Id'].'&updateName='.$row['Clubname'].'&updateDescription='.$row['Description'].'&updateImage='.$row['Image'].' "><button> Update <i class="fa-regular fa-pen-to-square"></i></button></a>
                                                <a href="./backend/Module/deleteClub.php?deletedid='.$row['Id'].'" ><button>Delete<i class="fa-solid fa-trash"></i></button></a>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            echo '</div>';
                        } else {
                            echo "<div style='color: white'>No membre exist</div>";
                        }
                    ?>
                </div>
            </div>
        </section>
        <div class="pop_up pop" id="pop_up">
            <div class="form">
                <form action="./backend/Module/addClubs.php" method="POST" enctype="multipart/form-data">

                    <!-- Add club name -->
                    <div class="Club name">
                        <label for="name">Club name</label> <br>
                        <input type="text" name="Clubname" id="name" placeholder="Full name" required>
                    </div>
                    
                    <!-- Add club description -->
                    <div class="description">
                        <label for="description">Club description</label> <br>
                        <textarea type="text" name="Clubdescription" id="name" placeholder="Description" required></textarea>
                    </div>

                    <!-- Add club image -->
                    <div class="image">
                        <label for="image">Club image</label> <br>
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


    
    <!-- footer start -->
    <footer>
        <div class="footer_container">
            <div class="tel">
                <p>+81 123-5678-9101</p>
                <p>Privacy Policy</p>
            </div>
            <div class="copyright">
                <img src="./frontend/Sass/images/logo.png" alt="" width="50px">
                <p>&copy;Copyright. Designed And Developed By Oussama Haddi</p>
            </div>
            <div class="social_media">
                <div class="media">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- footer end -->


</body>
    <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    <script src="./frontend/js/addClub.js" type="module"></script>
</html>