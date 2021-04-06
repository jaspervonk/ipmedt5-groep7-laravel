function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

async function verwerk(){
    location.reload();
    // await sleep(2000);
    //document.getElementById("beoordeling").style.display = "block";
}