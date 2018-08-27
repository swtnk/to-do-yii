<?php

    function returnVisitors() {
        require_once('assets/helperFunctions/fetchRecentUser.php');
        $data = fetch_visitors();
        $data1 = $data -> fetchAll(PDO::FETCH_ASSOC);
        return json_encode($data1, JSON_PRETTY_PRINT);
    }

?>