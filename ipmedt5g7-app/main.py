import mysql.connector
import time


import serial
import os

mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="laravel",
    database="communication"
    )

port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=1.0)

mycursor = mydb.cursor()
while True:
    mycursor.execute("SELECT * from led")
    for x in mycursor:
        print(x[1])
    if x[1] == 'aan':
        print(x[1])
        port.write("l1")
    else:
        port.write("l0")
    
    rcv = port.readline().strip()
    if (rcv == 'b'):
        os.system("python update.py")
        
    mycursor.execute("SELECT * from led")

    time.sleep(1)
    mydb.commit()
    
mydb.close()