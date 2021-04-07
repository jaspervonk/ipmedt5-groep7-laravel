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

# pygame mixer om geluiden af te spelen
pygame.mixer.init()
pygame.mixer.music.load("marcrebillet_wakeup.mp3")

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

        # Kijk of de tijdens gelijk zijn aan de tijd van nu
        # if (alarmHours == currentTime.hour) and (alarmMinutes == currentTime.minute):
        if(10 == currentTime.hour) and (18 == currentTime.minute):
            pygame.mixer.music.play()
            port.write("1")
            print("Raspberry Pi Sends a '1' to the arduino nano")
            while(True):
                # Kijk of er een score is gegeven vanaf de Arduino nano
                sleepgunScore = port.readline().strip()
                if(sleepgunScore != ""):
                    print("Score added to sleepgunscores!")
                    currentDate = str(currentTime.day) + "/" + str(currentTime.month) + "/" +  str(currentTime.year) + " " + str(currentTime.hour) + ":" + str(currentTime.minute)
                    sleepgunScoreArray = sleepgunScore.split(":")
                    mycursor.execute("INSERT INTO sleepgunscores VALUES ('" + str(currentDate) + "'," + str(sleepgunScoreArray[4]) + "," + str(sleepgunScoreArray[0]) + "," + str(sleepgunScoreArray[1]) + "," + str(sleepgunScoreArray[2]) + "," + str(sleepgunScoreArray[3]) + "," + str(sleepgunScoreArray[5]) + ");")
                    pygame.mixer.music.stop()
                    break
                else:
                    print("Awaiting score...")
                    time.sleep(10)
            
            time.sleep(60)
                    
        else:
            port.write("0")
            print("Raspberry Pi Sends a '0' to the arduino nano")

    # Verplicht
    mydb.commit()

    # Wait a bit
    time.sleep(10)
