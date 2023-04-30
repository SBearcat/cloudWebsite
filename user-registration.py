import mysql.connector
from passlib.hash import bcrypt  # Use the bcrypt library to hash passwords

# Connect to MySQL database
conn = mysql.connector.connect(
    host="localhost",
    user="yourusername",
    password="yourpassword",
    database="yourdatabase"
)

# Get user input from a registration form
username = input("Enter username: ")
email = input("Enter email: ")
password = input("Enter password: ")

# Hash the password before storing it in the database
hashed_password = bcrypt.hash(password)

# Insert user data into database
cursor = conn.cursor()
sql = "INSERT INTO users (username, email, password) VALUES (%s, %s, %s)"
val = (username, email, hashed_password)
cursor.execute(sql, val)
conn.commit()

# Close database connection
conn.close()