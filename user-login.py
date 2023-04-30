import mysql.connector
from passlib.hash import bcrypt  # Use the bcrypt library to verify passwords

# Connect to MySQL database
conn = mysql.connector.connect(
    host="localhost",
    user="yourusername",
    password="yourpassword",
    database="yourdatabase"
)

# Get user input from a login form
username = input("Enter username or email: ")
password = input("Enter password: ")

# Query database for user
cursor = conn.cursor()
sql = "SELECT * FROM users WHERE username = %s OR email = %s"
val = (username, username)
cursor.execute(sql, val)
user = cursor.fetchone()

# Verify password
if user is not None and bcrypt.verify(password, user[3]):
    # User is authenticated, redirect to home page
    print("Login successful!")
else:
    # Invalid username or password
    print("Invalid username or password")

# Close database connection
conn.close()