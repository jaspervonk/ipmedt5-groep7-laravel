from time import sleep
import mysql.connector

import serial
import os

import requests

url = "https://api.barcodespider.com/v1/lookup"

mydb = mysql.connector.connect(
    host = "localhost",
    user= "max",
    passwd= "Laravel",
    database = "ipmedt5"
)
mycursor = mydb.cursor()

port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)
scanner = serial.Serial("/dev/ttyUSB4", baudrate=115200, timeout=0.5)

while True:
    print('Scan barcode: ')
    barcode = scanner.readline()
    print("barcode =", barcode)
    print("------------------------------------")

    querystring = {"upc":barcode}
    headers = {
        'token': "78ecdb5a897a3707a85b",
        'Host': "api.barcodespider.com",
        'Accept-Encoding': "gzip, deflate",
        'Connection': "keep-alive",
        'cache-control': "no-cache"
    }
    try:
        response = requests.request("GET", url, headers=headers, params=querystring)
        item = response.json()
        type(item)
        productnaam = item['item_attributes']['title']
        merk = item['item_attributes']['brand']
        print(productnaam)
        print(merk)
        mycursor.execute("INSERT INTO `shoppinglist` (product,merk) VALUES (%s, %s)", (productnaam, merk))
        mydb.commit()
        port.write(str.encode(productnaam))
        port.write(str.encode(merk))
    except:
        print("Barcode onbekend")
        port.write(str.encode("Barcode onbekend"))
