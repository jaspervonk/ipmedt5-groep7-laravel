window.onload = () =>{
    checkFeedbackPopup();
}

function checkFeedbackPopup(){
    const feedbackPopup = document.getElementById("js--feedbackPopup");
    const feedbackPopupText = document.getElementById("js--feedbackPopupText");

    if(localStorage.getItem("feedbackPopup") != "none"){
        feedbackPopupText.innerHTML = localStorage.getItem("feedbackPopupText");
        feedbackPopup.style.background = localStorage.getItem("feedbackPopupColor");
        feedbackPopup.style.height = "5rem";
        setTimeout(function(){ feedbackPopup.style.height = "0rem"}, 5000);
        localStorage.setItem("feedbackPopup", "none");
    }
}

function setPopup(popupText, popupColor){
    localStorage.setItem("feedbackPopup", "true");
    localStorage.setItem("feedbackPopupText", popupText);
    localStorage.setItem("feedbackPopupColor", popupColor);
}