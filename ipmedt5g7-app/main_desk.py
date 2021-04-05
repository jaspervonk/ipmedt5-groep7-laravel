# import mysql.connector
# import time


# import serial
# import os

# mydb = mysql.connector.connect(
#     host="localhost",
#     user="laravel",
#     passwd="laravel",
#     database="communication"
#     )

# port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=1.0)

# mycursor = mydb.cursor()
# while True:
#     mycursor.execute("SELECT * from led")
#     for x in mycursor:
#         print(x[1])
#     if x[1] == 'aan':
#         print(x[1])
#         port.write("l1")
#     else:
#         port.write("l0")
    
#     rcv = port.readline().strip()
#     if (rcv == 'b'):
#         os.system("python update.py")
        
#     mycursor.execute("SELECT * from led")

#     time.sleep(1)
#     mydb.commit()
    
# mydb.close()


import mysql.connector
import time
from datetime import date

import serial
import os

mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="laravel",
    database="deskWork"
    )
x=0
port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=1.0)
print("maindesk.py is aan het runnen")
mycursor = mydb.cursor()
while True:
    rcv = port.readline().strip()
    # print(rcv)

    if (rcv == 's'):
        mycursor.execute("UPDATE deskworking SET working_status = 'aan het werken';")
        mydb.commit()

    elif (rcv == 'p'):
        mycursor.execute("UPDATE deskworking SET working_status = 'gepauzeerd';")
        mydb.commit()

    elif (rcv == 'r'):
        mycursor.execute("UPDATE deskworking SET working_status = 'aan het werken';")
        mydb.commit()

    elif (rcv == 'e'):
        mycursor.execute("UPDATE deskworking SET working_status = 'niet aan het werken';")
        mydb.commit()

    elif (rcv == 'gp'):
        mycursor.execute("UPDATE deskworking SET working_status = '!TIJD OM TE PAUZEREN!';")
        mydb.commit()

    elif (rcv == 'gw'):
        mycursor.execute("UPDATE deskworking SET working_status = '!TIJD OM WEER TE WERKEN!';")
        mydb.commit()

    elif(rcv != ""):
        try:
            getallen = rcv.split(" ")
            werk_tijd = getallen[0]
            pauze_tijd = getallen[1]
            aantal_pauzes = getallen[2]

            werk_tijd_seconden = int(werk_tijd)
            pauze_tijd_seconden = int(pauze_tijd)
            
            werk_tijd_minuten = werk_tijd_seconden // 60
            werk_tijd_minuten_aftrek = werk_tijd_minuten * 60
            werk_tijd_seconden = werk_tijd_seconden - werk_tijd_minuten_aftrek
            werk_tijd_uren = werk_tijd_minuten // 60
            werk_tijd_uren_aftrek = werk_tijd_uren * 60
            werk_tijd_minuten = werk_tijd_minuten - werk_tijd_uren_aftrek

            pauze_tijd_minuten = pauze_tijd_seconden // 60
            pauze_tijd_minuten_aftrek = pauze_tijd_minuten * 60
            pauze_tijd_seconden = pauze_tijd_seconden - pauze_tijd_minuten_aftrek
            pauze_tijd_uren = pauze_tijd_minuten // 60
            pauze_tijd_uren_aftrek = pauze_tijd_uren * 60
            pauze_tijd_minuten = pauze_tijd_minuten - pauze_tijd_uren_aftrek

            werk_tijd_uren = str(werk_tijd_uren)
            werk_tijd_minuten = str(werk_tijd_minuten)
            werk_tijd_seconden = str(werk_tijd_seconden)

            pauze_tijd_uren = str(pauze_tijd_uren)
            pauze_tijd_minuten = str(pauze_tijd_minuten)
            pauze_tijd_seconden = str(pauze_tijd_seconden)

            today = date.today()
            datum = today.strftime("%d-%m-%Y")
            datum_db = str(datum)

            
            feedback_werk_tijd = int(werk_tijd)
            feedback_pauze_tijd = int(pauze_tijd)
            feedback=""

            mycursor.execute("select deskjob from active_deskjob;")
            for x in mycursor:
                deskjob = x[0]

            if (int(aantal_pauzes) == 0):
                if (feedback_werk_tijd < 8100):
                    feedback = "Je hebt niet gepauzeerd, maar wel GOED gewerkt."
                elif(feedback_werk_tijd >= 8100):
                    feedback = "Je hebt NIET goed gewerkt, je had moeten pauzeren tussendoor."

            elif(int(aantal_pauzes) > 0):
                if ((feedback_pauze_tijd/feedback_werk_tijd) < 0.0625):
                    feedback = "Je hebt NIET goed gewerkt, je hebt te WEINIG gepauzeerd."
                elif ((feedback_pauze_tijd/feedback_werk_tijd) > 0.25):
                    feedback = "Je hebt NIET goed gewerkt, je hebt te VEEL gepauzeerd."
                else:
                    feedback = "Je hebt GOED gewerkt, de verhouding van tijden is GOED."


            # mycursor.execute("INSERT INTO desktimer (total_work_seconds, total_pause_seconds) VALUES (20, 15);")
            # mycursor.execute("INSERT INTO desktimer (total_work_seconds, total_pause_seconds) VALUES (" + werk_tijd + ", " + pauze_tijd + ");")
            mycursor.execute("INSERT INTO desktimer VALUES ('" + deskjob + "', " +  werk_tijd_uren + ", " + werk_tijd_minuten + ", "+ werk_tijd_seconden + ", " + pauze_tijd_uren + ", " + pauze_tijd_minuten + ", " + pauze_tijd_seconden + ", '" + datum_db + "', " + aantal_pauzes + ", '" + feedback + "');")
            mydb.commit()
            # print("hij komt hier")
        except:
            print("er is ergens en error")       
    time.sleep(1)
    # print("main_desk.py is aan het runnen")
    

    
mydb.close()