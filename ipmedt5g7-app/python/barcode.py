from time import sleep
import mysql.connector
import serial
import os
import sys
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

hid = { 4: 'a', 5: 'b', 6: 'c', 7: 'd', 8: 'e', 9: 'f', 10: 'g', 11: 'h', 12: 'i', 13: 'j', 14: 'k', 15: 'l', 16: 'm', 17: 'n', 18: 'o', 19: 'p', 20: 'q', 21: 'r', 22: 's', 23: 't', 24: 'u', 25: 'v', 26: 'w', 27: 'x', 28: 'y', 29: 'z', 30: '1', 31: '2', 32: '3', 33: '4', 34: '5', 35: '6', 36: '7', 37: '8', 38: '9', 39: '0', 44: ' ', 45: '-', 46: '=', 47: '[', 48: ']', 49: '\\', 51: ';' , 52: '\'', 53: '~', 54: ',', 55: '.', 56: '/'  }
hid2 = { 4: 'A', 5: 'B', 6: 'C', 7: 'D', 8: 'E', 9: 'F', 10: 'G', 11: 'H', 12: 'I', 13: 'J', 14: 'K', 15: 'L', 16: 'M', 17: 'N', 18: 'O', 19: 'P', 20: 'Q', 21: 'R', 22: 'S', 23: 'T', 24: 'U', 25: 'V', 26: 'W', 27: 'X', 28: 'Y', 29: 'Z', 30: '!', 31: '@', 32: '#', 33: '$', 34: '%', 35: '^', 36: '&', 37: '*', 38: '(', 39: ')', 44: ' ', 45: '_', 46: '+', 47: '{', 48: '}', 49: '|', 51: ':' , 52: '"', 53: '~', 54: '<', 55: '>', 56: '?'  }
fp = open('/dev/hidraw0', 'rb')

def convertTuple(tup):
    str =  ''.join(tup)
    return str

def readBarcode():  
    ss = ""
    shift = False
    done = False
    while not done:
        buffer = fp.read(8)
        for c in buffer:
        	if ord(c) > 0:
        		if int(ord(c)) == 40:
        			done = True
        			break
        		if shift: 
        			if int(ord(c)) == 2 :
        				shift = True

        			else:
        				ss += hid2[ int(ord(c)) ]
        				shift = False
        		else:
        			if int(ord(c)) == 2 :
        				shift = True
        			else:
        				ss += hid[ int(ord(c)) ]

    return ss

while True:
    print("Scan barcode")
    ss = readBarcode()
    querystring = {"upc" : ss}
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
        port.write(str(productnaam))
        failed = False
    except:
        print("Barcode onbekend in API")
        #port.write(str("Barcode onbekend    Probeer het opnieuw"))
        failed = True
    if(failed == True):
        try:
            print("Zoeken in stored products")
            print(ss)
            #----------------------------------------------------------------------
            #queryProduct = """SELECT product FROM stored_products WHERE EAN = """ 
            queryProduct = """SELECT product FROM stored_products WHERE EAN = %s""" % ss
            print(queryProduct)
            #queryBrand = """SELECT %s FROM stored_products WHERE EAN = %s """

            Storedproductnaam = (ss)
            #Storedmerk = ("merk", ss)

            product = mycursor.execute(queryProduct)
            #merk = mycursor.execute(queryBrand, Storedmerk)
            product = mycursor.fetchall()
            productStr = ' '.join(map(str, product))
            productStr = productStr.replace("(", "")
            productStr = productStr.replace("'", "")
            productStr = productStr.replace(",", "")
            productStr = productStr.replace(")", "")
            productStr = productStr[1:]


        #----------------------------------------------------------------------
            if(productStr != ''):
                queryInsert = """INSERT INTO shoppinglist (product) VALUES ('%s', '%s');""" % productStr
                print(queryInsert)
                mycursor.execute(queryInsert)
                mydb.commit()
            else:
                print("Barcode onbekend!")
        except:
            print("Barcode onbekend")
            port.write(str("Barcode onbekend    Probeer het opnieuw"))

           