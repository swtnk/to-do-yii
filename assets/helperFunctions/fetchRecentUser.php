<?php

    function fetch_visitors() {
        require_once('assets/helperClasses/connectdb.php');
        $connect_to_fetch_visitors = new DBConnect('global_db', 'root', '');
        $connect_to_fetch_visitors = $connect_to_fetch_visitors -> getConnection();

        $query = 'SELECT INET_NTOA(ip) as ip, `time` FROM `visitors` ORDER BY `time` DESC LIMIT 10';
        $query = $connect_to_fetch_visitors -> prepare($query);
        $query -> execute();

        $result = $query -> fetch(PDO::FETCH_ASSOC);

        // print_r($result);
        return $query;
    }
?>