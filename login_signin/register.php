<?php
    require_once ("../db/dbConnection.php");

    $dbconnect = new DbConnection();
    $dbconnect->connectToDb();
    $password = md5(md5($_POST['password']));
    $query = "
    INSERT INTO User(UserName , UserSurname,email,password)
    VALUES ('{$_POST['name']}','{$_POST['surname']}','{$_POST['email']}','{$password}');
    ";
//    print_r($_COOKIE);
    
    $dbconnect->query($query);
    $dbconnect->dissconnectFromDb();




    header("Location: login.php?email={$_POST['email']}&password={$_POST['password']}");