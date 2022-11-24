

<?php

    session_start();

    include_once "Connection.php";

    $username = $_POST['UserName'];
    $password = $_POST['Password'];
    
    $sql = "SELECT * FROM ADMIN WHERE UserName='$username' and Password = '$password'";
    
    $query = mysqli_query($conc, $sql);
    
    if (mysqli_num_rows($query) != 0)
    {
        $_SESSION['UserName'] = $username;
        $_SESSION['Password'] = $password;
        header('location: ../../dashboard_membre.php');
        exit();
    }
    else
    {
        header('location: ../../login.php?erreur="password"');
    }

?>

