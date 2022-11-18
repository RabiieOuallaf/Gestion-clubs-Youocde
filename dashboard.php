<?php
    require_once 'Module/Connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Sass/main.css">
    <title>Dashboard</title>
</head>
<body>
    
    <div class="body">
        <section class="dashboard_bar">
            <div class="dash_container">
                <div class="logo">
                    <a href="./index.php"><img src="./Sass/images/logo.png" alt=""></a>
                </div>
                <div class="manage">
                    <ul>
                        <li><img src="./Sass/images/🦆 icon _people outline_.png" alt="" width="30px"><span>Members</span></li>
                        <li><img src="./Sass/images/🦆 icon _home outline_.png" alt="" width="30px"><span>Clubs</span></li>
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
                        <img src="./Sass/images/🦆 icon _search outline_.png" alt="">
                        <img src="./Sass/images/🦆 icon _bell outline_.png" alt="">
                        <img src="./Sass/images/art 1.png" alt="" width="50px" class="admin">
                        <img src="./Sass/images/🦆 icon _log out_.png" alt="">
                    </div>
                </div>
            </div>

            <div class="tableaux_membre">
                <div class="add"><img src="./Sass/images/🦆 icon _plus_.png" alt=""></div>

                <?php 
                    // try and catch => check if there is an erreur in code php
                    try {
                        $sql = "SELECT * FROM USER";
                        $result = mysqli_query($conc, $sql);
                        $checkResult = mysqli_num_rows($result);
                        if($checkResult > 0){
                            echo '<table>
                                <tr>
                                    <th>Nome</th>
                                    <th>Class</th>
                                    <th>Email</th>
                                    <th>Club</th>
                                    <th>Action</th>
                                </tr>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td><img src="./Sass/images/'.$row['Img'].'" alt="" width="50px" align="center"><span>'.$row['Name'].'</span></td>
                                    <td>'.$row['Class'] .'</td>
                                    <td>'.$row['Email'].'</td>
                                    <td>'.$row['Club'].'</td>
                                    <td><img src="./Sass/images/more.png" alt="" width="20px"></td>
                                </tr>';
                            }
                            echo '</table>';
                        } else {
                            echo "tableaux vide";
                        }
                    } catch (Exception $e) {
                        echo 'Exception reçue : ',  $e->getMessage(), "\n";
                    }
                ?>
            </div>
        </section>
    </div>

    

</body>
</html>