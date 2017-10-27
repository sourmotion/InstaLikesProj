<?php
    require_once './db/DbConnection.php';

        function tokenSetAndRight()
        {
            if(isset($_COOKIE['loginToken'])&&$_COOKIE['loginToken']!='') {
                $l = new DbConnection();
                $l->connectToDb();
                $res = $l->query("SELECT token FROM User WHERE idUser = {$_COOKIE['loginId']}");
                $res= $res->fetch_assoc();
                $db= $res['token'];
                $cook=$_COOKIE['loginToken'];

                if ($res['token'] == $_COOKIE['loginToken']){
                    return true;
                }

                return false;
            }
            return false;
        }



