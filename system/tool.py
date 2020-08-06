import requests

import time
from selenium import webdriver
import os
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import Select
import sys

import threading 
from PIL import Image




def manual():

	values = {}
	


	chrome_options = webdriver.ChromeOptions()
	# below trick saved my life
	chrome_options.add_argument('--no-sandbox')
	#chrome_options.add_argument('--headless')
	chrome_options.add_argument('--disable-dev-shm-usage')



	driver = webdriver.Chrome('./chromedriver',chrome_options=chrome_options)
	chrome_options=chrome_options
	driver.maximize_window()

	driver.get("https://mathtesttakersforhire.com/")

	time.sleep(5)
	driver.execute_script("window.asd = 3; document.addEventListener('mousedown', function (e) {console.log(e.target.parentNode.tagName); if(e.target.parentNode.tagName=='DIV' ){ if(e.target.parentNode.children.length>3) {window.currentElement = e.target; window.asd=5;} else{e.target.style.display = 'none'; }}});")
	
	ef = driver.execute_script("return window.asd;");
	
	try:
		driver.execute_script("document.getElementById('masthead').children[1].style.display = 'none';")
	except:
		print("")

	finalHeight = 0
	width = 900
	maxHeight = 0


	while ef!=5:
		ef = driver.execute_script("return window.asd;");
	
	if ef==5:
		driver.set_window_position(-10000,0)
		er = driver.execute_script("return window.currentElement.parentNode.children.length;")
		print(er)

		ypos = driver.execute_script("return window.currentElement.parentNode.offsetTop;")
		xpos = driver.execute_script("return window.currentElement.parentNode.offsetLeft;")
		width = driver.execute_script("return $(window.currentElement.parentNode).width();")
		width += 50
#https://www.skalex.io/blockchain-p2p-applications/
		driver.save_screenshot('pageImage.png');	

		for num in range(0,er):
			try:

				eee = driver.execute_script("return $(window.currentElement.parentNode.children["+str(num)+"]).height();")
				print(eee)
				if maxHeight<eee:
					maxHeight = eee

				values[num] = eee
				finalHeight += eee


				im = Image.open('pageImage.png')
				im = im.crop((0,0, width, eee))
				im.save('element'+str(num)+'.png')

				time.sleep(5)

				driver.execute_script("console.log(window.currentElement.parentNode.children["+str(num)+"].tagName); window.currentElement.parentNode.children["+str(num)+"].scrollIntoView();");
				
				driver.save_screenshot('pageImage.png');
				time.sleep(5)
				
			except Exception as ee:
				print(ee)

		try:

			img = Image.new('RGB', (width,finalHeight), (255, 255, 255))
			
			py1 = maxHeight
			py2 = 0

			for num1 in range(0,er):
				try:
					im1 = Image.open('element'+str(num1)+'.png')
					img.paste(im1,(0,py2))
					py2 += values[num1]


				except:
					print("#@##")	

			img.save("final.png","PNG")
					#driver.execute_script("var pdf = new jsPDF('p', 'mm', 'a4');pdf.html(document.getElementById('intro'), {callback: function (pdf) {pdf.save('invoice.pdf');}});")
			image1 = Image.open('final.png')
			im1 = image1.convert('RGB')
			im1.save('final.pdf')	

		except:
			print("GOOOOD")


	

	print("FINISGHED")

	time.sleep(100)







def amazon_scraper():

	chrome_options = webdriver.ChromeOptions()
	# below trick saved my life
	chrome_options.add_argument('--no-sandbox')
	#chrome_options.add_argument('--headless')
	chrome_options.add_argument('--disable-dev-shm-usage')



	driver = webdriver.Chrome('./chromedriver',chrome_options=chrome_options)
	chrome_options=chrome_options
	driver.maximize_window()

	driver.get("https://paysomeonetodo.com/")

	time.sleep(5)


	#driver.execute_script(open("./html2canvas.js", encoding="utf8").read())
	driver.execute_script("var po = document.createElement('script');po.type = 'text/javascript';po.async = true;po.src = 'https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js';var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po, s);")
	time.sleep(5)



	"""
	driver.execute_script("html2canvas(document.getElementsByClassName('col-lg-7 col-md-12 col-sm-12')[0]).then(canvas => {  var imgData = canvas.toDataURL('image/jpeg',1);var pdf = new jsPDF('p', 'mm', 'a4');var pageWidth = pdf.internal.pageSize.getWidth();var pageHeight = pdf.internal.pageSize.getHeight();var imageWidth = canvas.width;var imageHeight = canvas.height;var ratio = imageWidth/imageHeight >= pageWidth/pageHeight ? pageWidth/imageWidth : pageHeight/imageHeight;pdf.addImage(imgData, 'JPEG', 0, 0, imageWidth * ratio, imageHeight * ratio);pdf.save('invoice.pdf');  });");
	"""


	
	driver.execute_script("document.getElementById('masthead').children[1].style.display = 'none';")

	driver.execute_script("document.getElementById('intro').scrollIntoView();")
	driver.save_screenshot("pageImage.png");

	ypos = driver.execute_script("return document.getElementById('intro').getElementsByTagName('div')[0].getElementsByTagName('div')[6].offsetTop;")
	xpos = driver.execute_script("return document.getElementById('intro').getElementsByTagName('div')[0].getElementsByTagName('div')[6].offsetLeft;")
	width = 1300

	py = 0
	maxHeight = 0
	finalHeight = 0

	for num in range(0,7):
		try:
			
			driver.execute_script("document.getElementById('intro').getElementsByTagName('div')[0].getElementsByTagName('div')[6].children["+str(py)+"].scrollIntoView();");
			eee = driver.execute_script("return document.getElementById('intro').getElementsByTagName('div')[0].getElementsByTagName('div')[6].children["+str(py)+"].offsetHeight;")
			
			#width = driver.execute_script("return document.getElementById('intro').getElementsByTagName('div')[0].getElementsByTagName('div')[6].children["+str(py)+"].style.width;")
			if maxHeight<eee:
				maxHeight = eee

			finalHeight += eee
			
			im = Image.open('pageImage.png')
			im = im.crop((xpos, ypos, width, eee+ypos))
			im.save('element'+str(num)+'.png')

		

			driver.save_screenshot('pageImage.png');

			py += 1;
			time.sleep(5)
		except:
			print("")



	try:
		img = Image.new('RGB', (width,finalHeight), (255, 255, 255))
		
		py1 = 255-34
		py2 = 0

		for num1 in range(0,7):
			try:
				im1 = Image.open('element'+str(num1)+'.png')
				img.paste(im1,(0,py2))
				py2 += py1
			except:
				print("#@##")



		img.save("final.png","PNG")
		#driver.execute_script("var pdf = new jsPDF('p', 'mm', 'a4');pdf.html(document.getElementById('intro'), {callback: function (pdf) {pdf.save('invoice.pdf');}});")
		image1 = Image.open('final.png')
		im1 = image1.convert('RGB')
		im1.save('final.pdf')
	except:
		print("GOOOOD")


	time.sleep(500)

	#driver.get('https://secure-wms.com/WebUI/V1/V1Link/StockStatusReport.aspx')


if sys.argv[1]=="auto":
	amazon_scraper()
else:
	manual()


#add_to_backend()