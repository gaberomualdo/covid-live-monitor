"""
This file runs a basic cronjob every 10 minutes to send a request to a local Node.js server
which scrapes the WHO coronavirus site and gets a video URL of the latest virus press
release.

It then sends the scraped URL to a PHP server which writes that data to a JS file
for the site.
"""

import schedule
import requests
from datetime import date, datetime
from time import gmtime, strftime, sleep

# function to be run every 10 minutes
def update_current_cases():
    # send initial request to local Node.js server
    request = requests.get("http://localhost:7001/")
    if(request.status_code == 200):
        # send response (as GET variable) of that request to the PHP server
        finalRequest = requests.get("http://localhost:7000/get_live_updates.php?src=" + request.text)
        if(finalRequest.status_code == 200):
            print("Success " + request.text)
        else:
            print("ERROR: " + str(finalRequest.status_code))
    else:
        print("ERROR: " + str(request.status_code))

# run function
update_current_cases()

# run function every 10 minutes
schedule.every(10).minutes.do(update_current_cases)

while True:
    schedule.run_pending()
    sleep(30)
