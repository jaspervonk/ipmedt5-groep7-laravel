window.onload = () =>{
    updateNavigation();
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

function updateNavigation(){
    const mainHeader = document.getElementById("js--mainHeader");
    const navList = document.getElementById("js--nav");
    const directory = window.location.pathname;
    
    if(directory == "/opstaan"){
        localStorage.setItem("headerColor", "linear-gradient(180deg, #5D6595 0%, #1F1842 100%)");
    }
    else if(directory == "/boodschappenlijst"){
        localStorage.setItem("headerColor", "linear-gradient(#C3A5E4, #837BC6)");
    }
    else if(directory == "/recepten"){
        localStorage.setItem("headerColor", "linear-gradient(180deg, #90C8F5 0%, #8494EC 100%)");
    }
    else if(directory == "/desk"){
        localStorage.setItem("headerColor", "linear-gradient(180deg, #5D6595 0%, #1F1842 100%)");
    }
    else if(directory == "/gebruiker"){
        localStorage.setItem("headerColor", "linear-gradient(180deg, #6AEAB2 0%, #20B798 100%)");
    }

    mainHeader.style.background = localStorage.getItem("headerColor");
    navList.style.background = localStorage.getItem("headerColor");
}