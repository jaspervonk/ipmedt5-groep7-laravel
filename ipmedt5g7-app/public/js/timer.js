// Swiper functie 
const swiper = new Swiper('.swiper-container', {
    observer: true,
    observeParents: true,

    pagination: {
      el: '.swiper-pagination',
    },
  
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

// Het veranderen van displays na het starten van het recept  
function receptStart() {
    document.getElementById("bereiden").style.display = "none";
    document.getElementById("slider").style.display = "block";
    document.getElementById("receptStart").style.display = "none";
    document.getElementById("receptStop").style.display = "block";
}

// sleep functie
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

// 3 countdown timer functies voor de recepten die tot de 3 timers kunnen hebben
 function countdown(hr,mm,ss)
    {
        document.getElementById("cdBtn_1").style.display = "none";
        const interval = setInterval( async function(){
            // Hier telt de timer af en zorgt ervoor dat de uren minuten en secondes een goede overgang maken bij de 00
            ss--;
            if(ss == 0 && mm != 0)
            {
                ss = 59;
                mm--;
                if(mm == 0 && hr != 0)
                {
                    mm = 59;
                    hr--;
                }
            }

            // Voegt een 0 voor de getal toe wanneer de waardes onder de 10 zijn zodat het niet bijvoorbeeld 00:9:00 wordt 
            if(hr.toString().length < 2) hr = "0"+hr;
            if(mm.toString().length < 2) mm = "0"+mm;
            if(ss.toString().length < 2) ss = "0"+ss;
            $("#timer").html(hr+" : "+mm+" : "+ss);
            
            // Stopt de timer wanneer alle waardes 0 zijn
            if(hr == 0 && mm == 0 && ss == 1){
                await sleep(990);
                $("#timer").html("Tijd is voorbij!");
                clearInterval(interval);
                
            }
        },1000)
    }

    function countdown1(hr,mm,ss)
    {
        document.getElementById("cdBtn_2").style.display = "none";
        var interval = setInterval(async function(){

            ss--;
            if(ss == 0 && mm != 0)
            {
                ss = 59;
                mm--;
                if(mm == 0 && hr != 0)
                {
                    mm = 59;
                    hr--;
                }
            }

            if(hr.toString().length < 2) hr = "0"+hr;
            if(mm.toString().length < 2) mm = "0"+mm;
            if(ss.toString().length < 2) ss = "0"+ss;
            $("#timer2").html(hr+" : "+mm+" : "+ss);

            if(hr == 0 && mm == 0 && ss == 1){
                await sleep(990);
                $("#timer2").html("Tijd is voorbij!");
                clearInterval(interval);  
            }
        },1000)
    }

    function countdown2(hr,mm,ss)
    {
        document.getElementById("cdBtn_1").style.display = "none";
        var interval = setInterval(async function(){

            ss--;
            if(ss == 0 && mm != 0)
            {
                ss = 59;
                mm--;
                if(mm == 0 && hr != 0)
                {
                    mm = 59;
                    hr--;
                }
            }

            if(hr.toString().length < 2) hr = "0"+hr;
            if(mm.toString().length < 2) mm = "0"+mm;
            if(ss.toString().length < 2) ss = "0"+ss;
            $("#timer3").html(hr+" : "+mm+" : "+ss);

            if(hr == 0 && mm == 0 && ss == 1){
                await sleep(990);
                $("#timer3").html("Tijd is voorbij!");
                clearInterval(interval);  
            }
        },1000)
    }

