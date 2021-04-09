function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

async function verwerk(){
    location.reload();
}

function receptScore(){
    document.getElementById("beoordelingSection").style.display = "none";
    document.getElementById("scoreSection").style.display = "block";
}