<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>To-Do | Swetank Subham</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style/custom-style.css" type="text/css">
        <style>
            .btn-danger::placeholder{
                color: #fff;
            }
        </style>
    </head>
    <body>
        <?php
            require_once('assets/helperFunctions/storeVisitorIP.php');
            storeVisitorIP();
        ?>
        <div class="container-fluid">
            <div class="row" style="height: 12px;"></div>
            <div class="row">
                <div class="offset-4 col-4 card bg-faded card-block content-container">
                    <div class='header'>To-Do-List</div>
                    <!-- to-do form -->
                    <?php
                        include 'assets/components/todoApp.php';
                    ?>
                    <!-- end to-do form -->
                    <p style="text-align: center; margin-top: 15px;">*Under development</p>
                </div>
            </div>
            <div style="margin-top: 20px;"></div>
            <div class="test-data row footer" style="position: absolute; bottom: 0; width: 100%; height: 180px;">
                <div class="col-12 card" style="background: #000; color: #fff; overflow-Y: scroll;">
                    <div class="tester">Visitors</div>
                        <div class="row" style="padding: 15px 0 15px 0;">
                            <div class="col-sm-4 ipaddr">IP Address</div>
                            <div class="col-sm-4 visittime">Visit time</div>
                        </div>
                            <?php
                                require_once('assets/helperFunctions/fetchRecentUser.php');
                                $data = fetch_visitors();
                            ?>

                            <?php while($row = $data -> fetch(PDO::FETCH_ASSOC)): ?>

                                <div class="row" style="padding: 15px 0 15px 0;">
                                    <div class="col-sm-4 ipaddr"><?php echo $row['ip'] ?></div>
                                    <div class="col-sm-4 visittime"><?php echo date('d F, Y h:m:s:n', time($row['time'])) ?></div>
                                </div>

                            <?php endwhile; ?>
                    
                            <!-- <?php
                                while($row = $data -> fetch(PDO::FETCH_ASSOC)) {
                                    echo "<div class='row'>";
                                    echo "<div class='col-4 ipaddr'> " . $row['ip'] . "</div>";
                                    echo "<div class='col-4 visittime'>" . $row['time'] . "</div>";
                                    echo "</div>";
                                }

                            ?> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="assets/js/custom-js.js" type="text/javascript"></script>
        <script src="assets/js/ajax-calls.js" type="text/javascript"></script>
    </body>
</html>