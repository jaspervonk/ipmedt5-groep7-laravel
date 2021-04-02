function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

 function countdown(hr,mm,ss,timer)
    {
        const interval = setInterval( async function(){
            
            ss--;
            if(ss == 0)
            {
                ss = 59;
                mm--;
                if(mm == 0)
                {
                    mm = 59;
                    hr--;
                }
            }

            if(hr.toString().length < 2) hr = "0"+hr;
            if(mm.toString().length < 2) mm = "0"+mm;
            if(ss.toString().length < 2) ss = "0"+ss;
            $("#timer").html(hr+" : "+mm+" : "+ss);
            // if(timer = 1){
            //     $("#timer").html(hr+" : "+mm+" : "+ss);
            // }
            // else if(timer = 2){
            //     $("#timer2").html(hr+" : "+mm+" : "+ss);
            // }

            // else if(timer = 3){
            //     $("#timer3").html(hr+" : "+mm+" : "+ss);
            // }
            
            if(hr == 0 && mm == 0 && ss == 1){
                await sleep(990);
                $("#timer").html("00 : 00 : 00");
                clearInterval(interval);
                
            }


        },1000)
    }

    function countdown1(hr,mm,ss)
    {
        document.getElementById("timer").style.display = "none";
        var interval = setInterval(async function(){

            ss--;
            if(ss == 0)
            {
                ss = 59;
                mm--;
                if(mm == 0)
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
                $("#timer2").html("00 : 00 : 00");
                clearInterval(interval);  
            }

        },1000)
    }

    function countdown2(hr,mm,ss)
    {
        document.getElementById("timer").style.display = "none";
        var interval = setInterval(async function(){

            ss--;
            if(ss == 0)
            {
                ss = 59;
                mm--;
                if(mm == 0)
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
                $("#timer3").html("00 : 00 : 00");
                clearInterval(interval);  
            }

        },1000)
    }