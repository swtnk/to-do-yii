<?php
    class DBConnect {
        private $dbname;
        private $user;  
        private $password;

        function __construct($dbname, $user, $password) {

            $this -> dbname = $dbname;
            $this -> user = $user;
            $this -> password = $password;

        }

        function getConnection() {

            try {

                $connect = new PDO("mysql:host=localhost;dbname=" . $this -> dbname, $this -> user, $this -> password);
                if($connect) {

                    return $connect;

                }

                $connect = null;

            } catch (PDOException $e) {

                die("OOPS! Something went wrong...<br>");

            }

        }

    }
    
?>