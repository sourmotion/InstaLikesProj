<?php
require_once ("../db/dbConnection.php");

    $dbconnect = new DbConnection();
    $dbconnect->connectToDb();

    $email = $_POST['email'];
    $password=md5(md5($_POST['password']));

//    echo $email . " ". $password;

    $res = $dbconnect->query("SELECT 1,idUser FROM User WHERE email = '$email' AND password = '$password'");
    $token= md5(uniqid(rand(), true));
    $result = $res->fetch_assoc();

    if ($result[1]=== '1'){

        $dbconnect->query("UPDATE User SET token = '$token' WHERE email = '$email'");
        $dbconnect->dissconnectFromDb();
        if(!isset($_COOKIE['loginToken']))
            setcookie('loginToken', $token, time()+20*60, '/');
        else
            $_COOKIE['loginToken']=$token;
        setcookie('loginId', $result['idUser'] , time()+20*60, '/');

    }else{
//        echo 'login failed';
        $dbconnect->dissconnectFromDb();
    }
    header("Location: ../");
?>

