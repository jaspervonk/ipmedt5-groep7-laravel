import mysql.connector
import serial
import os
import time

import datetime
import pygame

# Defineer de database en port
mydb = mysql.connector.connect(
    host="localhost",
    user="nano",
    passwd="Linkzelda123",
    database="laravel"
    )

port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=1.0)

mycursor = mydb.cursor()

# Array List om te kijken welke dag het is
weekdayArray = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"]

# Functie die de dag van vandaag returned
def getWeekday():
    currentWeekdayInteger = datetime.datetime.today().weekday()
    return weekdayArray[currentWeekdayInteger]

# Geef de Arduino nano opstart tijd
time.sleep(10)

while True:
    # Haal de dag van vandaag op
    currentWeekday = getWeekday()
    
    # vul currentTime met de tijd van nu
    currentTime = datetime.datetime.now() 

    print("Current day:\t\t" + currentWeekday)
    print("Current Hours:\t\t" + str(currentTime.hour))
    print("Current Minutes:\t" + str(currentTime.minute))  

    # Haal van de dag van vandaag alarmHours en alarmMinutes op uit de tabel wekkers
    mycursor.execute("SELECT * FROM wekkers WHERE day = '" + currentWeekday + "';")
    for x in mycursor:
        alarmDay = x[0]
        alarmHours = x[1]
        alarmMinutes = x[2]
  
        print("Alarm Day:\t" + alarmDay)
        print("Alarm Hours:\t" + str(alarmHours))
        print("Alarm Minutes:\t" + str(alarmMinutes))

        # Kijk of de tijdens gelijk zijn aan de tijd van nu --> Zet Sleepgun aan
        if (alarmHours == currentTime.hour) and (alarmMinutes == currentTime.minute):
            port.write("1")
            print("Raspberry Pi Sends a '1' to the arduino nano")
        else:
            port.write("0")
            print("Raspberry Pi Sends a '0' to the arduino nano")
    
    # Check of de Arduino aan is gegaan --> Wacht op een score
    time.sleep(1)
    arduinoSignal = port.readline().strip()
    if(arduinoSignal == '49'):
        os.system('sudo aplay marcrebillet_wakeup.wav &')
        while(True):
            # Kijk of er een score is gegeven vanaf de Arduino nano
            arduinoSignal = port.readline().strip()
            if(arduinoSignal != ""):
                print("Score added to sleepgunscores!")
                # Kijk of het aantal uren/minuten onder 10 zit; Anders moet er een 0 bij
                if(currentTime.hour < 10):
                    currentHour = "0" + str(currentTime.hour)
                else:
                    currentHour = currentTime.hour
                if(currentTime.minute < 10):
                    currentMinute = "0" + str(currentTime.minute)
                else:
                    currentMinute = currentTime.minute
                currentDate = str(currentTime.day) + "/" + str(currentTime.month) + "/" +  str(currentTime.year) + " " + str(currentHour) + ":" + str(currentMinute)
                mycursor.execute("SELECT * FROM activeUser WHERE id = 1;")
                for x in mycursor:
                    activeUser = x[1]
                sleepgunScoreArray = arduinoSignal.split(":")
                mycursor.execute("INSERT INTO sleepgunscores VALUES ('" + str(activeUser) + "','" + str(currentDate) + "'," + str(sleepgunScoreArray[4]) + "," + str(sleepgunScoreArray[0]) + "," + str(sleepgunScoreArray[1]) + "," + str(sleepgunScoreArray[2]) + "," + str(sleepgunScoreArray[3]) + "," + str(sleepgunScoreArray[5]) + ");")
                os.system('sudo killall aplay')
                break
            else:
                print("Awaiting score...")
                time.sleep(1)
        

    # Verplicht
    mydb.commit()

    # Wait a bit
    time.sleep(10)
