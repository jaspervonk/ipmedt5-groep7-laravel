# import mysql.connector

# mydb = mysql.connector.connect(
#     host="localhost",
#     user="laravel",
#     passwd="laravel",
#     database="communication"
# )

# mycursor = mydb.cursor()

# mycursor.execute("UPDATE count SET seconds = seconds + 1;")
# mydb.commit()

import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="laravel",
    database="communication"
)

mycursor = mydb.cursor()

mycursor.execute("UPDATE deskworking SET working_status = 'aan het werken';")
mydb.commit()