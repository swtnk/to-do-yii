<?php

    function connect_to_db($dbname) {
        try {

            $dbname = $dbname;
            $user = 'root';
            $password = '';
            $connect = new PDO("mysql:host=localhost;dbname=$dbname", $user, $password);
            
            if($connect) {
                return $connect;
            }
    
            $connect = null;
    
        } catch (PDOException $e) {
    
            print "OOPS!: " . $e -> getMessage() . "<br />";
            die();
    
        }

    }

?>