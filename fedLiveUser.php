<?php 
    require_once('assets/components/visitorsRecord.php');
    $liveUsers = returnVisitors();
    echo $liveUsers;
?>