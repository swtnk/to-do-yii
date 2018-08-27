function visitorUpdator() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.status == 200) {
            let visitors = JSON.parse(this.responseText);
            console.log(visitors);
        }
    };  
    xhttp.open("GET", "/projects/to-do/fedLiveUser.php", true);
    xhttp.send();
}

setInterval(visitorUpdator, 2000);