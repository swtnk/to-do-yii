function visitorUpdator() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responsetext);
        }
    };  
    xhttp.open("GET", "/projects/to-do/fedLiveUser.php", true);
    xhttp.send();
}

setInterval(visitorUpdator(), 1000);