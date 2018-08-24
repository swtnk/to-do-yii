<?php
    class GetUserIp {
        var $IP;
        var $timestamp;

        function __construct() {
            $this -> timestamp = time();
            if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                $_SERVER["REMOTE_ADDR"] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                $_SERVER["HTTP_CLIENT_IP"] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            }
            $client = @$_SERVER["HTTP_CLIENT_IP"];
            $forward = @$_SERVER["HTTP_X_FORWARDED_FOR"];
            $remote = $_SERVER["REMOTE_ADDR"];

            if(filter_var($client, FILTER_VALIDATE_IP)) {
                $this -> IP = $client;
            } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                $this -> IP = $forward;
            } else {
                $this -> IP = $remote;
            }
        }

        function getIP() {
            return $this -> IP;
        }

    }

?>