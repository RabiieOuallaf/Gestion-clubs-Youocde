<?php
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
                        <li style="background-color: #212429;"><a href="./dashboard_membre.php"><img src="./frontend/Sass/images/🦆 icon _people outline_.png" alt="" width="30px"><span>Members</span></a></li>
                        <li><a href="./dashboard_clubs.php"><img src="./frontend/Sass/images/🦆 icon _home outline_.png" alt="" width="30px"><span>Clubs</span></a></li>
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
                        <img src="./frontend/Sass/images/art 1.png" alt="" width="50px" class="admin">
                        <a href="./logout.php"><div class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></div></a>
                    </div>
                </div>
            </div>

            <div class="tableaux_membre">
                <h2 style="color: white; align-text: center;">
                    Welcome back 
                    <?php 
                        echo '<span style="color: #5EC2ED; text-transform: capitalize;">'.$_SESSION['UserName'];
                    ?>
                </h2>
                <div class="add" id="btn_add">
                    <img src="./frontend/Sass/images/🦆 icon _plus_.png" alt="">
                </div>
                <div class="table">
                    <!-- table membres -->
                    <?php 
                        // try and catch => check if there is an erreur in code php
                        $sql = "SELECT * FROM USER";
                        $result = mysqli_query($conc, $sql);
                        $checkResult = mysqli_num_rows($result);
                        if($checkResult > 0){
                            echo '<table>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Class</th>
                                    <th>Email</th>
                                    <th>Club</th>
                                    <th>Action</th>
                                </tr>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                                echo '
                                <tr num="'.$row['Id'].'">
                                    <td>'.$row['Id'] .'</td>
                                    <td><img src="./frontend/Sass/images/membre/" alt=""><span>'.$row['FullName'].'</span></td>
                                    <td>'.$row['Class'] .'</td>
                                    <td>'.$row['Email'].'</td>
                                    <td>'.$row['Club'].'</td>
                                    <td>
                                    <a href="./updateMemeberforum.php?updateid='.$row['Id'].'&updateName='.$row['FullName'].'&updateClub='.$row['Club'].'&updateClass='.$row['Class'].'&updateEmail='.$row['Email'].'"><button>Update<i class="fa-regular fa-pen-to-square"></i></button></a>
                                    <a href="./backend/Module/deleteMemeber.php?deletedid='.$row['Id'].'" ><button>Delete<i class="fa-solid fa-trash"></i></button></a>
                                    </td>
                                </tr>';
                            }
                            echo '</table>';
                        } else {
                            echo "<div style='color: white'>No membre exist</div>";
                        }
                    ?>
                </div>
            </div>
        </section>
        <div class="pop_up pop" id="pop_up">
            <div class="form">
                <form action="./backend/Module/addMembre.php" method="POST">
                    
                    <div class="id" style="display:none;">
                    <label for="id">Id</label>
                        <input type="number" name="Id" id="id" placeholder="Member Id" readonly>
                    </div>
                    <div class="name">
                        <label for="name">Name</label>
                        <input type="text" name="FullName" id="name" placeholder="Full name" required>
                    </div>
                    <div class="class">
                        <label for="class">Class</label>
                        <input type="text" name="Class" id="class" placeholder="Class name" required>
                    </div>
                    <div class="email">
                        <label for="email">Email</label>
                        <input type="email" name="Email" id="email" placeholder="jhonsmith@gmail.com" required>
                    </div>
                    <div class="club">
                        <label for="club">Club</label>
                        <select name="Club" id="club" required>
                            <optgroup label="Clubs" focused>
                                <option value="Art">Art</option>
                                <option value="Sport">Sport</option>
                                <option value="It">It</option>
                                <option value="Programming">Programming</option>
                                <option value="Environement">Environement</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="btns">
                        <input type="submit" id="submit" class="submit" value="Ajouter">
                        <input type="reset" value="cancel" class="submit" id="cancel" style="background-color:red; cursor: pointer;">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
    <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    <script src="./frontend/js/addMembre.js" type="module"></script>
</html>