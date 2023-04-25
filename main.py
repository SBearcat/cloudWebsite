import MySQLdb
from flask import Flask, render_template, request, session, redirect, url_for
from flask_mysqldb import MySQL
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)

# app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql://root:Ncokoj12!@localhost/CloudComputing'
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = 'password'
app.config['MYSQL_DB'] = 'CloudComputing'

# conn = MySQLdb.connect(
#     host='<db_host>',
#     user='<db_username>',
#     password='<db_password>',
#     db='<db_name>'
# )

app = Flask(__name__, template_folder='template', static_folder='static', static_url_path='/static')


@app.route('/')
def index():
    return redirect(url_for('login'))


@app.route('/login.static', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        # Get the username and password from the login form
        email = request.form['email']
        password = request.form['password']

        # Connect to the database
        db = MySQLdb.connect(host="localhost", user="root", passwd="Ncokoj12!", db="CloudComputing")

        # Create a cursor object to execute SQL queries
        cursor = db.cursor()

        # Execute the SQL query to check if the user exists
        query = "SELECT * FROM user WHERE username=%s AND password=%s"
        cursor.execute(query, (email, password))

        # Fetch the results of the query
        result = cursor.fetchone()

        # If the user exists, log them in
        if result:
            session['username'] = email
            return redirect('cloudcompWebsite')
        else:
            # If the user doesn't exist, show an error message
            error = 'Invalid login credentials. Please try again.'
            return render_template('login', error=error)

    # If the request method is GET, show the login form
    return render_template('login.html')


@app.route('/signup', methods=['GET', 'POST'])
def signup():
    if request.method == 'POST':
        # Get the username, email, and password from the signup form
        username = request.form['username']
        email = request.form['email']
        password = request.form['password']

        # Connect to the database
        db = MySQLdb.connect(host="localhost", user="root", passwd="", db="CloudComputing")

        # Create a cursor object to execute SQL queries
        cursor = db.cursor()

        # Execute the SQL query to insert the user into the database
        query = "INSERT INTO user (username, email, password) VALUES (%s, %s, %s)"
        cursor.execute(query, (username, email, password))

        # Commit the changes to the database
        db.commit()

        # Log the user in and redirect to the dashboard
        session['username'] = username
        return redirect('/dashboard')

    # If the request method is GET, show the signup form
    return render_template('login.html')


@app.route('/logout')
def logout():
    session.clear()
    # add your MySQLdb code to update the user's login status
    return redirect(url_for('login.html'))


if __name__ == '__main__':
    app.run(debug=True)
