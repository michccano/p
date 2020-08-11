import os
import json

from flask import Flask
from flask_cors import CORS
app = Flask(__name__)

cors = CORS(app)





@app.route('/')
def hello_world():
	count = 0
	os.system('cp /var/log/apache2/access.log ../dashboard/system/2.log')
	eee = os.system('tac ../dashboard/system/2.log > ../dashboard/system/a.txt')
	print(eee)


	dic = {}
	urls = {}
	status = {}

	file1 = open('../dashboard/system/a.txt', 'r') 
	Lines = file1.readlines() 
	  
	count = 0
	# Strips the newline character 
	for line in Lines: 
		count += 1
		
		tmp = line.strip().split(' ')
	

		if str(tmp[6])+","+str(tmp[1]) in urls:
			urls[str(tmp[6])+","+str(tmp[1])]+=1;
			
		else:
			try:
				urls[str(tmp[6])+","+str(tmp[1])] = 1
				
			except:
 				print("EEEE")

		if str(tmp[0]) in dic:
 			dic[tmp[0]] += 1
		else:
 			dic[tmp[0]] = 1

		if str(tmp[8]) in status:
 			status[tmp[8]] +=1
		else:
 			status[tmp[8]] = 1



		if count>50:
			break 


	arr = []
	arr1 = []
	arr2 = []
	for url in urls:
		arr.append({"url":url,"count":urls[url]})

	for d in dic:
		arr1.append({"ip":d,"count":dic[d]})

	for s in status:
		arr2.append({"status":s,"count":status[s]})
	print(urls)
	return json.dumps({"data":arr1,"urls":arr,"status":arr2})




if __name__ == '__main__':
   app.run('0.0.0.0')


