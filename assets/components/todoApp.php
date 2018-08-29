<div class="form" id="toDoFormArea">
    <form id="todoForm" name="todoForm">
        <div class="input-group mb-3">
            <input type="text" id="todoHeader" name="todoHeader" class="form-control" placeholder="Create Title" aria-label="Title" aria-describedby="basic-addon1">
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
                    <input type="date" name="startDate" class="form-control" id="startTime">
                </div>
                <div class="form-group col-sm-6">
                    <small><label for="endTime">End Time:</label></small>
                    <input type="date" name="endDate" class="form-control" id="endTime">
                </div>
            </div>
            <div class="form-row"> 
                <div class="form-group col-sm-12">
                    <small><label for="desc">Description:</label></small>
                    <textarea name="description" class="form-control" id="desc"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <button name="createTodo" class="btn btn-primary col-sm-12" id="saveToDo">Save</button>
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