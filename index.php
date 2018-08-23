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
    <div class="container-fluid">
        <div class="row" style="height: 12px;"></div>
        <div class="row">
            <div class="offset-4 col-4 card bg-faded card-block content-container">
                <div class='header'>To-Do-List</div>

                <!-- to-do form -->
                <div class="form">
                    <form id="todoForm">
                        <div class="input-group mb-3">
                            <input type="text" id="todoHeader" class="form-control" placeholder="Create Title" aria-label="Title" aria-describedby="basic-addon1">
                            <div class="input-group-append" id="todoAddDivBtn">
                                <button class="btn btn-outline-secondary" id="addToDo" type="button"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="input-group-append d-none" id="todoCloseDivBtn">
                                <button class="btn btn-outline-secondary" id="closeToDo" type="button"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="detailedToDo card d-none" id="todoDetails" style="margin-top: -15px; padding: 5px;">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <small><label for="startTime">Start Time:</label></small>
                                    <input type="date" class="form-control" id="startTime" placeholder="Email">
                                </div>
                                <div class="form-group col-sm-6">
                                    <small><label for="endTime">End Time:</label></small>
                                    <input type="date" class="form-control" id="endTime" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-row"> 
                                <div class="form-group col-sm-12">
                                    <small><label for="desc">Description:</label></small>
                                    <textarea class="form-control" id="desc"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <button class="btn btn-primary col-sm-12" id="saveToDo">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show d-none" role="alert">
                        <strong>Set a title for To-Do proceed.</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <!-- end to-do form -->
                <p style="text-align: center; margin-top: 15px;">*Under development</p>
            </div>
        </div>
        <div style="margin-top: 20px;"></div>
        <div class="test-data row footer" style="position: absolute; bottom: 0; width: 100%; height: 180px;">
            <div class="col-12 card" style="background: #000; color: #fff; overflow-Y: scroll;">
                <p class="center tester">Test-Data</p>
                <?php
                    require_once('assets/helperClasses/todo.php');
                ?>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/custom-js.js" type="text/javascript"></script>
</body>
</html>