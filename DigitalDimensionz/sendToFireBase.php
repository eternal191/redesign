<?php

error_reporting(E_ALL);

require 'DbConnect.php';

    if ( isset($_POST['token']) ){



        $db = new DbConnect;
        $conn = $db->connect();
        $cdate = date('Y-m-d');


        $stmt = $conn->prepare("INSERT INTO tokens VALUES(null, :token, :cdate)");

        $stmt->bindParam(':token', $_POST['token']);
        $stmt->bindParam(':cdate', $cdate);


        if ( $stmt->execute() ) {
            echo 'Token Saved..';
        } else {
            echo 'Failed to save token..';
        }


    /*    try{
           return $stmt->execute();
            echo 'Token Saved..';

        }catch (PDOException $e){

            print_r( $e );
            echo 'Failed to save token..';

        }*/



    }

?>