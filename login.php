
<?php
    require_once './backend/Module/Connection.php';
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./frontend/Sass/main.css">
    <title>Login</title>
</head>

<body class="login_body">

    <div class="logo">
        <img src="./frontend/Sass/images/logo.png" alt="" width="250px">
    </div>

    <div class="login">

        <?php 
            if (isset($_SESSION['UserName'])) {
                header('location: ./dashboard_statistique.php');
            } else {
        ?>

        <form action="./backend/Module/authentification.php" method="POST">
            <div class="text-1">
                <h1>ACOUNT LOGIN</h1>
            </div>
            <div class="us">
                <label for="usernam">Username</label>
                <input type="text" name="UserName" placeholder="Username" id="usernam"  required>
            </div>
            <div class="ps">
                <label for="password">Password</label>
                <input type="password" name="Password" placeholder="Password" id="password" required> <br>

                <?php 
                    if (isset($_GET['erreur'])) {
                        echo "<span style='color:red;margin-top: 10px; background: #ffd3d3; padding: .5rem; border-radius: 3px;'>Username or Password incorrect.</span>";
                    }
                ?>

            </div>
            <div class="go">
                <input class="ok" type="submit">
            </div>
            <div class="back">
                <a href="./index.php"><i class="fa-solid fa-arrow-left-long"></i><li class="Back">Back To Home</li></a>
            </div>
        </form>

        <?php } ?>
        
    </div>
</body>

    <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    <script src="./frontend/js/addMembre.js" type="module"></script>
</html>