
let hours = document.getElementById("js--hours");
let minutes = document.getElementById("js--minutes");
let seconds = document.getElementById("js--seconds");
let sessiontext = document.getElementById("js--sessiontext");

let gestart = false;
let paused = false;
let sessie = 1;


function start_timer() {
    if (gestart == false){
        sessiontext.innerHTML = "sessie " + sessie;
        gestart = true;
    }
}

function pause_timer(){
    if (paused == false && gestart == true){
        sessiontext.innerHTML = "gepauzeerd";
        paused = true;
    }
    else if (paused == true && gestart == true){
        sessie = sessie + 1;
        sessiontext.innerHTML = "sessie " + sessie;
        paused = false;
    }
}


function end_timer(){
    gestart = false;
    paused = false;
    sessiontext.innerHTML = "gestopt";
    sessie = 1;
}

function refreshen() {
    setTimeout(function(){
        window.location.reload(1);
     }, 5000);
}
