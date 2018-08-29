<?php

    function returnVisitors() {
        require_once('assets/helperFunctions/fetchRecentUser.php');
        $data = fetch_visitors();
        $data1 = $data -> fetchAll(PDO::FETCH_ASSOC);
        return $data1;
    }

    returnVisitors();

?>