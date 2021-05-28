<?php

class database{

    private $host;
    private $username;
    private $password;
    private $database;
    private $dbh;

    public function __construct(){

        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'jongerenkansrijker';

        try {

            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->dbh = new PDO($dsn, $this->username, $this->password);
        }
         catch (PDOException $e) {

            die("Connection failed!-> " . $e->getMessage());

        }
    }

    public function insert($sql, $placeholder){

        try{

            $this->dbh->beginTransaction();

            $statement = $this->dbh->prepare($sql);
            $statement->execute($placeholder);

            $this->dbh->commit();

        }

        catch(PDOException $e){

            $this->dbh->rollback();
            echo $e->getMessage();

        }

    }

    public function login($username, $password){

        $sql = "SELECT id, username, password FROM medewerkers WHERE username = :username";

        $statement = $this->dbh->prepare($sql);

        $statement->execute([

            'username'=>$username,

        ]);

        $info = $statement->fetch(PDO::FETCH_ASSOC);

        if(is_array($info) && count($info) > 0){

            if($username && password_verify($password, $info['password'])){

                session_start();

                $_SESSION['id'] = $info['id'];
                $_SESSION['username'] = $info['username'];
                $_SESSION['is_logged_in'] = true;

                header("location: welcome.php");

            }
            
            else {

                echo "Username and/or password is incorrect..";
                

            }

        }

        else {

            echo "Username and/or password is incorrect...";

        }

    }

}










?>