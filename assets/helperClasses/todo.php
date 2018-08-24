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
            $connection = new DBConnect('todo_db', 'todo_user', 'connect@123');
            $connect = $connection -> getConnection();

            foreach($connect -> query('SELECT * FROM `todo_data`') as $row) {

                print_r($row);

            }

        }

    }

    $todo1 = new TodoCreator('Header1', 'This is a new todo.', 'Started at 1', 'Ended at 2', 'pending', 'test123');
    $data = $todo1 -> getTodo();
    $data2 = $todo1 -> getFromDB();
?>