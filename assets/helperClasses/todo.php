<?php 
    class ToDoCreator {

        var $time;
        var $header;
        var $body;
        var $startTime;
        var $endTime;
        var $status;
        var $userid;

        function __construct($header, $body, $startTime, $endTime, $status, $userid){

            $this -> time = time();
            $this -> header = $header;
            $this -> body = $body;
            $this -> startTime = $startTime;
            $this -> endTime = $endTime;
            $this -> status = $status;
            $this -> userid = $userid;

        }

        function getTodo(){

            return array("time" => $this -> time, "header" => $this -> header,
                "body" => $this -> body, "startTime" => $this -> startTime,
                "endTime" => $this -> endTime, "status" => $this -> status,
                "userid" => $this -> userid);

        }

        function getFromDB(){

            require_once('connectdb.php');
            $connect = connect_to_db('todo_db');

            foreach($connect -> query('SELECT * FROM `todo_data`') as $row) {

                print_r($row);

            }

        }

    }

    $todo1 = new TodoCreator('Header1', 'This is a new todo.', 'Started at 1', 'Ended at 2', 'pending', 'test123');
    $data = $todo1 -> getTodo();
    // var_dump($data);
    $data2 = $todo1 -> getFromDB();
?>