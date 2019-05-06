<?php


class DbConnect {

    private $host = 'localhost';
    private $DbName = 'fcm-push';
    private $user = 'root';
    private $pass = 'root';

    public function connect(){

        try {
            $conn = new PDO("mysql:host=' . $this->host . '; dbname=" . $this->DbName, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'CONNECTED';


        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }

    }

}



?>