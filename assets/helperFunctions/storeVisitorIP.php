<?php

    function storeVisitorIP() {
        require_once('../helperClasses/getUserIP.php');
        $ip = new GetUserIp();
        require_once('../helperClasses/connectdb.php');
        $connect = new DBConnect("global_db", 'root', '');
        $connect = $connect -> getConnection();

        foreach($connect -> query('SELECT * FROM `todo_data`') as $row) {

            print_r($row);

        }
        
    }
?>