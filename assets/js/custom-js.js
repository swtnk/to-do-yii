document.onreadystatechange = () => {
    if (document.readyState === 'complete') {
        // document.querySelector("body").onkeydown = (e) => {
        //     e.preventDefault();
        //     if(e.keyCode == 17 && e.keyCode == 18) {
        //         console.log("ctrl + N");
        //     } else {
        //         console.log(e.keyCode);
        //     }
        // }
        // show close button, show todo details fields and hide add button
        document.querySelector("#toDoFormArea").onkeydown = (e) => {
            if (e.keyCode == 13){
                e.preventDefault();
                if(document.querySelector("#todoHeader").value === ''){
                    document.querySelector("#todoHeader").classList.add('btn-danger');
                    document.querySelector("#errorAlert").classList.remove('d-none');
                } else {
                    document.querySelector("#errorAlert").classList.add('d-none');
                    document.querySelector("#todoHeader").classList.remove('btn-danger');
                    document.querySelector("#todoCloseDivBtn").classList.remove('d-none');
                    document.querySelector("#todoDetails").classList.remove('d-none');
                    document.querySelector('#todoAddDivBtn').classList.add('d-none');
                }
            } else if (e.keyCode == 27) {
                document.getElementById("todoForm").reset();
                document.querySelector("#todoHeader").classList.remove('btn-danger');
                document.querySelector("#todoAddDivBtn").classList.remove('d-none');
                document.querySelector("#todoDetails").classList.add('d-none');
                document.querySelector('#todoCloseDivBtn').classList.add('d-none');
                document.querySelector('#errorAlert').classList.add('d-none');
            }
        }
        //
        // show close button, show todo details fields and hide add button
        document.querySelector("#addToDo").addEventListener('click', () => {
            if(document.querySelector("#todoHeader").value === ''){
                document.querySelector("#todoHeader").classList.add('btn-danger');
                document.querySelector("#errorAlert").classList.remove('d-none');
            } else {
                document.querySelector("#errorAlert").classList.add('d-none');
                document.querySelector("#todoHeader").classList.remove('btn-danger');
                document.querySelector("#todoCloseDivBtn").classList.remove('d-none');
                document.querySelector("#todoDetails").classList.remove('d-none');
                document.querySelector('#todoAddDivBtn').classList.add('d-none');
            }
        });
        // show add button, hide todo details fields and hide close button
        document.querySelector("#closeToDo").addEventListener('click', () => {
            document.getElementById("todoForm").reset();
            document.querySelector("#todoAddDivBtn").classList.remove('d-none');
            document.querySelector("#todoDetails").classList.add('d-none');
            document.querySelector('#todoCloseDivBtn').classList.add('d-none');
        });
    }
}