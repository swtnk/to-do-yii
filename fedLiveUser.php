<?php
    header('Content-Type: application/json');
    require_once('assets/components/visitorsRecord.php');
    $liveUsers = returnVisitors();
    echo gettype($liveUsers);
?>