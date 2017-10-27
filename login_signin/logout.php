<?php


    unset($_COOKIE['loginToken']);
    unset($_COOKIE['loginId']);
    setcookie('loginId', '',time()+1,'/');
    setcookie('loginToken', '',time()+1,'/');

    header("Location: /");