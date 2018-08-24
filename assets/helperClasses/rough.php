function connect_to_db($dbname) {
        try {

            $dbname = $dbname;
            $user = 'todo_user';
            $password = 'connect@123';
            $connect = new PDO("mysql:host=localhost;dbname=$dbname", $user, $password);
            
            if($connect) {
                return $connect;
            }
    
            $connect = null;
    
        } catch (PDOException $e) {
    
            print "OOPS!: " . $e -> getMessage() . "<br />";
            die();
    
        }

    }