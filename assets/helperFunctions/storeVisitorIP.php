<?php

    function storeVisitorIP() {
        require_once('assets/helperClasses/getUserIP.php');
        $ip = new GetUserIp();
        $ip = $ip -> getIP();
        $curr_time = time();
        require_once('assets/helperClasses/connectdb.php');
        $ip_store_connect = new DBConnect("global_db", 'root', '');
        $ip_store_connect = $ip_store_connect -> getConnection();    
        $statment = $ip_store_connect -> prepare("INSERT INTO `visitors` (`ip`, `time`) VALUES (INET_ATON(?), ?)");
        $statment -> execute(array(
            $ip,
            $curr_time
        ));
    }

?>