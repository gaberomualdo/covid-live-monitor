import os
import datetime
import requests
import PyPDF2

parse_all_pdfs = False

pdf_reference_date = datetime.datetime(2020, 3, 11)
pdf_reference_num = 51

if(parse_all_pdfs):
	current_pdf_reference_date = pdf_reference_date
	current_pdf_reference_num = pdf_reference_num

	def getCmdWithEnd(end):
		cmdToRun = "curl " + getURLWithEnd(end) + " -o pdfs/" + current_pdf_reference_date.strftime("%Y-%m-%d") + ".pdf"
		return cmdToRun

	def getURLWithEnd(end):
		urlToRequestBeginning = "https://www.who.int/docs/default-source/coronaviruse/situation-reports/" + current_pdf_reference_date.strftime("%Y%m%d") + "-sitrep-" + str(current_pdf_reference_num) + "-"
		return urlToRequestBeginning + end + ".pdf"

	urlEndings = ["covid-19", "ncov", "ncov-v3", "ncov-cleared", "2019-ncov-cleared", "2019--ncov", "2019-ncov"]

	while(current_pdf_reference_num > 0):
		print(current_pdf_reference_num)

		for ending in urlEndings:
			urlToRequest = getURLWithEnd(ending)
			request = requests.get(urlToRequest)

			if(request.status_code == 200):
				os.system(getCmdWithEnd(ending))
				break

		current_pdf_reference_date = current_pdf_reference_date - datetime.timedelta(days=1)
		current_pdf_reference_num = current_pdf_reference_num - 1
else:
	# get yesterday's date situation pdf
	date =  datetime.datetime.combine(datetime.date.today(), datetime.datetime.min.time()) - datetime.timedelta(days=1)
	pdf_num = (date - pdf_reference_date).days + pdf_reference_num

	def getCmdWithEnd(end):
		cmdToRun = "curl " + getURLWithEnd(end) + " -o pdfs/" + date.strftime("%Y-%m-%d") + ".pdf"
		return cmdToRun

	def getURLWithEnd(end):
		urlToRequestBeginning = "https://www.who.int/docs/default-source/coronaviruse/" + date.strftime("%Y%m%d") + "-sitrep-" + str(pdf_num) + "-"
		return urlToRequestBeginning + end + ".pdf"

	urlEndings = ["covid-19", "ncov", "ncov-v3", "ncov-cleared", "2019-ncov-cleared", "2019--ncov", "2019-ncov"]

	for ending in urlEndings:
		urlToRequest = getURLWithEnd(ending)
		request = requests.get(urlToRequest)

		if(request.status_code == 200):
			os.system(getCmdWithEnd(ending))
			break;

	print(date)
	print(pdf_num)