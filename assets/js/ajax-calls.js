document.querySelector('#saveToDo').addEventListener('click', (e) => {

    e.preventDefault()

    let getForm = document.querySelector('#todoForm');
    let formData = new FormData(getForm);

    formData.forEach((value, key) => {
        
    })

})

let visitorUpdator = () => {

    let xhttp = new XMLHttpRequest();    

    xhttp.onreadystatechange = function() {

        if (this.status == 200) {

            let visitors = this.responseText;
            let jsonData = JSON.parse(visitors);
            document.querySelector('#abcd').innerHTML = visitors;

        }

    };  

    xhttp.open("GET", "/projects/to-do/fedLiveUser.php", true);
    xhttp.send();

}
setInterval(visitorUpdator, 1000);