import mysql.connector
import time
import serial

mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="laravel",
    database="ipmedt5_test"
)

port = serial.Serial('/dev/ttyUSB0', baudrate=9600, timeout=3.0)

mycursor = mydb.cursor()

while True:
    beoordeling = port.readline().strip()
    if (beoordeling == '0'):
        mycursor.execute("UPDATE cijfer SET waarde = 0;")
    elif (beoordeling == '1'):
        mycursor.execute("UPDATE cijfer SET waarde = 1;")
    elif (beoordeling == '2'):
        mycursor.execute("UPDATE cijfer SET waarde = 2;")
    elif (beoordeling == '3'):
        mycursor.execute("UPDATE cijfer SET waarde = 3;")
    elif (beoordeling == '4'):
        mycursor.execute("UPDATE cijfer SET waarde = 4;")
    elif (beoordeling == '5'):
        mycursor.execute("UPDATE cijfer SET waarde = 5;")
    elif (beoordeling == '6'):
        mycursor.execute("UPDATE cijfer SET waarde = 6;")
    elif (beoordeling == '7'):
        mycursor.execute("UPDATE cijfer SET waarde = 7;")
    elif (beoordeling == '8'):
        mycursor.execute("UPDATE cijfer SET waarde = 8;")
    elif (beoordeling == '9'):
        mycursor.execute("UPDATE cijfer SET waarde = 9;")

    time.sleep(1)
    mydb.commit()

mydb.close()