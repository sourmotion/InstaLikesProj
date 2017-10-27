<?php

class DbConnection
{
    private $link;
    private $host;
    private $user;
    private $password;
    private $dbname;

    public function __construct($host= "localhost", $user= "root", $password="", $dbname="mydb")
    {
        $this->host= $host;
        $this->user= $user;
        $this->password= $password;
        $this->dbname= $dbname;

    }

    public function query($query){

        return mysqli_query($this->link,$query);

    }

    public function connectToDb()
    {
        $this->link=new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if (!$this->link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

//    public function insert($val){
//        $stmt = $this->link->prepare("INSERT INTO REGISTRY (name, value) VALUES (:name, :value)");
//    }
    public function dissconnectFromDb(){
        mysqli_close($this->link);
    }


}
