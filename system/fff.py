import imaplib
import email
from email.header import decode_header
import webbrowser
import os
import base64
import paramiko
import time

import requests


from selenium import webdriver
import os
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import Select
import sys

import threading 
from PIL import Image
import mysql.connector

import string
from random import *
import json


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="123wet123P@",
  database="app"
)





def automate(ip,un,pw):

	#key = paramiko.RSAKey(data=base64.b64decode(b'AAA...'))
	client = paramiko.SSHClient()
	#client.get_host_keys().add('ssh.example.com', 'ssh-rsa', key)
	client.set_missing_host_key_policy(paramiko.AutoAddPolicy())
	print(un)
	print(pw)
	client.connect(ip, username=un, password=pw,look_for_keys=True, allow_agent=False)


	session = client.invoke_shell()
	session.send("\n")
	time.sleep(1)

	output = session.recv(65535)

	print(output)

	session.send(pw+"\n")


	output = session.recv(65535)

	print(output)


	session.send("123wet123\n")


	session.send("123wet123\n")


	output = session.recv(65535)

	print(output)
	"""
	session.send("y\n")
	time.sleep(1)


	session.send("123wet123\n")
	time.sleep(1)


	session.send("sudo apt-get install php libapache2-mod-php php-mysql \n")
	time.sleep(1)
	session.send("y\n")


	session.send("sudo nano /etc/apache2/mods-enabled/dir.conf \n")
	time.sleep(1)
	session.send("y\n")
	"""


	output = session.recv(65535)

	print(output)

	print("FIN	")
	client.close()





def finalize(did,tid,email,ip,data):

	chrome_options = webdriver.ChromeOptions()
	# below trick saved my life
	chrome_options.add_argument('--no-sandbox')
	#chrome_options.add_argument('--headless')
	chrome_options.add_argument('--disable-dev-shm-usage')



	driver = webdriver.Chrome('./chromedriver',chrome_options=chrome_options)
	chrome_options=chrome_options
	driver.maximize_window()

	#driver.get("https://cloud.digitalocean.com/droplets/202724150/power?i=1f4066")

	driver.get("https://cloud.digitalocean.com/droplets/"+str(did)+"/console?no_layout=true&i=1f4066#")
	time.sleep(5)



	driver.execute_script("document.getElementsByClassName('sc-AxhUy fFUeAA sc-fzoLag BNtsP')[0].click();");
	
	time.sleep(5)


	driver.find_element_by_id('identifierId').send_keys('josiahcyrilprivado@gmail.com')
	driver.find_element_by_id('identifierId').send_keys(Keys.RETURN)
	time.sleep(5)


	driver.find_element_by_name('password').send_keys('Privados1234')
	driver.find_element_by_name('password').send_keys(Keys.RETURN)
	
	
	time.sleep(15)
	
	#driver.get('https://cloud.digitalocean.com/projects')


	
	driver.find_element_by_class_name('click-intercept').send_keys('root')
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
	time.sleep(5)

	driver.find_element_by_class_name('click-intercept').send_keys('pOp123456P')
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
	time.sleep(5)

	driver.find_element_by_class_name('click-intercept').send_keys(ip)
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

	time.sleep(5)

	driver.find_element_by_class_name('click-intercept').send_keys(email)
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)


	time.sleep(5)
	
	x1 = json.loads(data)
	print(x1)


	driver.find_element_by_class_name('click-intercept').send_keys(x1['username'])
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
	
	time.sleep(5)
	driver.find_element_by_class_name('click-intercept').send_keys(x1['pw'])
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
	
	time.sleep(5)
	driver.find_element_by_class_name('click-intercept').send_keys('New WordPress Site on Parvaty Cloud')
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)


	
	time.sleep(5)
	driver.find_element_by_class_name('click-intercept').send_keys('y')
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

	time.sleep(5)
	driver.find_element_by_class_name('click-intercept').send_keys('y')
	driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)


	time.sleep(500)





def launch(pw,email,ip,did,tid,pas):

	chrome_options = webdriver.ChromeOptions()
	# below trick saved my life
	chrome_options.add_argument('--no-sandbox')
	#chrome_options.add_argument('--headless')
	chrome_options.add_argument('--disable-dev-shm-usage')



	driver = webdriver.Chrome('./chromedriver',chrome_options=chrome_options)
	chrome_options=chrome_options
	driver.maximize_window()


	driver.get("https://cloud.digitalocean.com/droplets/"+str(did)+"/console?no_layout=true&i=1f4066#")
	time.sleep(15)

	driver.execute_script("document.getElementsByClassName('sc-AxhUy fFUeAA sc-fzoLag BNtsP')[0].click();");
	
	time.sleep(5)

	driver.find_element_by_id('identifierId').send_keys('josiahcyrilprivado@gmail.com')
	

	driver.find_element_by_id('identifierId').send_keys(Keys.RETURN)
	time.sleep(5)


	driver.find_element_by_name('password').send_keys('Privados1234')
	driver.find_element_by_name('password').send_keys(Keys.RETURN)


	time.sleep(15)


	if pas==0:
		characters = string.ascii_letters + string.punctuation  + string.digits
		pword =  "".join(choice(characters) for x in range(randint(8, 16)))

		"""
		driver.find_element_by_class_name('click-intercept').send_keys('root')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys(pw)
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)


		time.sleep(15)
		driver.find_element_by_class_name('click-intercept').send_keys(pw)
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)


		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('123wet123')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('123wet123')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('sudo apt update')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

		time.sleep(10)
		driver.find_element_by_class_name('click-intercept').send_keys('sudo apt install apache2')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)


		time.sleep(10)

		driver.find_element_by_class_name('click-intercept').send_keys('y')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

		time.sleep(25)


		driver.find_element_by_class_name('click-intercept').send_keys('sudo ufw allow in "Apache Full"')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		

		driver.find_element_by_class_name('click-intercept').send_keys('sudo apt install mysql-server')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

		time.sleep(20)

		driver.find_element_by_class_name('click-intercept').send_keys('y')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)


		driver.find_element_by_class_name('click-intercept').send_keys('sudo mysql_secure_installation')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

		time.sleep(10)

		driver.find_element_by_class_name('click-intercept').send_keys('y')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

		time.sleep(10)

		driver.find_element_by_class_name('click-intercept').send_keys('1')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)

		
		time.sleep(10)

		driver.find_element_by_class_name('click-intercept').send_keys(pword)
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)


		time.sleep(10)

		driver.find_element_by_class_name('click-intercept').send_keys('n')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		time.sleep(5)

		for i in range(0,10):
			time.sleep(5)
			driver.find_element_by_class_name('click-intercept').send_keys('y')
			driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
			


		
	

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('sudo mysql')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		


		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys("ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '"+str(pword)+"';")
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys("FLUSH PRIVILEGES;")
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys("create dabase wp;")
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys("exit")
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys("sudo apt install php libapache2-mod-php php-mysql")
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys("y")
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(5)
		

		driver.find_element_by_class_name('click-intercept').send_keys("sudo nano /etc/apache2/mods-enabled/dir.conf")
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(5)

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.DOWN)
		
		for i in range(0,16):

			driver.find_element_by_class_name('click-intercept').send_keys(Keys.RIGHT)


		time.sleep(5)

		driver.find_element_by_class_name('click-intercept').send_keys('index.php ')
		
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.CONTROL, 'X')

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('s')

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('y')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
			

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('cd /var/www/html')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('wget https://wordpress.org/latest.tar.gz')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(15)
		driver.find_element_by_class_name('click-intercept').send_keys('tar -xzvf latest.tar.gz')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('mv  ./wordpress/* .')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('sudo chown -R www-data:www-data /var/www/html')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		

		driver.get('http://'+str(ip)+'/wp-admin/setup-config.php?step=1');

		time.sleep(5)
		driver.find_element_by_id('dbname').clear()
		driver.find_element_by_id('dbname').send_keys('wp')
		driver.find_element_by_id('uname').clear()
		driver.find_element_by_id('uname').send_keys('root')

		driver.find_element_by_id('pwd').clear()
		driver.find_element_by_id('pwd').send_keys('y%nN*j#kvc3a')
		
		driver.find_element_by_id('pwd').send_keys(Keys.ENTER)

		time.sleep(5)
		driver.get('http://'+str(ip)+'/wp-admin/install.php?language=en_US')

		time.sleep(5)
		driver.find_element_by_id('weblog_title').send_keys('New WordPress Site on Parvaty Cloud')
		driver.find_element_by_id('user_login').send_keys(email)
		driver.find_element_by_id('admin_email').send_keys(email)

		
		print(pword)
		driver.find_element_by_name('admin_password').clear()
		driver.find_element_by_name('admin_password').send_keys(pword)
		driver.find_element_by_name('admin_password').send_keys(Keys.ENTER)




		jsn = '{"username":"root","pw":"'+str(pword)+'"}'


		mycursor = mydb.cursor()

		sql = "UPDATE droplets  SET ip='"+str(ip)+"', status = '1',wpinfo='"+str(jsn)+"' WHERE id='"+str(tid)+"'"

		mycursor.execute(sql)

		mydb.commit()
		"""
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('kill -9 $(cat /var/run/crond.pid)')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		time.sleep(15)


		driver.find_element_by_class_name('click-intercept').send_keys('sudo nano /etc/apache2/apache2.conf')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		
		time.sleep(5)
		for i in range(0,211):
			driver.find_element_by_class_name('click-intercept').send_keys(Keys.DOWN)
		

		for i in range(0,22):

			driver.find_element_by_class_name('click-intercept').send_keys(Keys.RIGHT)
		

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.BACKSPACE)

		time.sleep(5)

		driver.find_element_by_class_name('click-intercept').send_keys('D ')
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.DOWN)
		
		time.sleep(5)



		for i in range(0,6):
			driver.find_element_by_class_name('click-intercept').send_keys(Keys.LEFT)


		for i in range(0,3):
			driver.find_element_by_class_name('click-intercept').send_keys(Keys.BACKSPACE)	

		
		driver.find_element_by_class_name('click-intercept').send_keys('D ')

		time.sleep(5)
		
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.DOWN)
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.BACKSPACE)	
		driver.find_element_by_class_name('click-intercept').send_keys('D ')



		
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.CONTROL, 'X')

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('s')

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('y')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		

		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys('systemctl apache restart')

		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)
		




	else:
		time.sleep(5)
		driver.find_element_by_class_name('click-intercept').send_keys(email)
		driver.find_element_by_class_name('click-intercept').send_keys(Keys.RETURN)





	time.sleep(500)

	



def checkemail(did,e,dn,tid,pas):

	# account credentials
	username = "josiahcyrilprivado@gmail.com"
	password = "Privados1234"

	# create an IMAP4 class with SSL 
	imap = imaplib.IMAP4_SSL("imap.gmail.com")
	# authenticate
	imap.login(username, password)

	status, messages = imap.select("INBOX")
	# number of top emails to fetch
	N = 505
	# total number of emails
	messages = int(messages[0])

	#print(messages)

	subject = ""
	body = ""
	found = False

	for i in range(messages, messages-N, -1):
	    # fetch the email message by ID
	    res, msg = imap.fetch(str(i), "(RFC822)")
	    for response in msg:
	        if isinstance(response, tuple):
	            # parse a bytes email into a message object
	            msg = email.message_from_bytes(response[1])
	            # decode the email subject
	            subject = decode_header(msg["Subject"])[0][0]
	            if isinstance(subject, bytes):
	                # if it's a bytes, decode to str
	                subject = subject.decode()
	                
	                	
	            # email sender
	            from_ = msg.get("From")
	            #print("Subject:", subject)
	            #print("From:", from_)
	            # if the email message is multipart
	            if msg.is_multipart():
	                # iterate over email parts
	                for part in msg.walk():
	                    # extract content type of email
	                    content_type = part.get_content_type()
	                    content_disposition = str(part.get("Content-Disposition"))
	                    try:
	                        # get the email body
	                        body1 = part.get_payload(decode=True).decode()
	                    except:
	                        pass
	                    if content_type == "text/plain" and "attachment" not in content_disposition:
	                        # print text/plain emails and skip attachments
	                        print("")
	                    elif "attachment" in content_disposition:
	                    	print("attachment")
	                        # download attachment
	                        #filename = part.get_filename()
	                        #if filename:
	                            #if not os.path.isdir(subject):
	                                # make a folder for this email (named after the subject)
	                                #os.mkdir(subject)
	                           # filepath = os.path.join(subject, filename)
	                            # download attachment and save it
	                           # open(filepath, "wb").write(part.get_payload(decode=True))
	            else:
	                # extract content type of email
	                content_type = msg.get_content_type()
	                # get the email body
	                body = msg.get_payload(decode=True).decode()
	                if content_type == "text/plain":
	                    # print only text email parts
	                    print("")
	            if content_type == "text/html":
	            	print("TEXT")
	    
	    if "Droplet" in subject:
	                	
	    	print("SDASD333")       
	    	fff = body.split('\n')
	    	if dn==fff[2].split(':')[1].strip():
	    		ip = fff[3].split(':')[1].strip()
	    		un = fff[4].split(':')[1]
	    		pw = fff[5].split(':')[1]
	    		launch(pw.strip(),e,ip,did,tid,pas)

	
	#automate("167.71.97.43",un.strip(),pw.strip())

	imap.close()
	imap.logout()



mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM droplets where status=0 order by ID DESC LIMIT 1")

myresult = mycursor.fetchall()

if len(myresult)>0:
	for x in myresult:
		print("####")
		checkemail(x[1],x[2],x[7],x[0],x[8])

else:
	mycursor.execute("SELECT * FROM droplets where status=1 order by ID DESC LIMIT 1")

	myresult = mycursor.fetchall()

	for x in myresult:
		print("ASD####")
		finalize(x[1],x[0],x[2],x[9],x[6])
		