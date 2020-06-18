"""
This file runs a basic cronjob every minute to send a request to a PHP server
that gets and updates the current total case count.
"""

import schedule
import requests
from datetime import date, datetime
from time import gmtime, strftime, sleep

# function to be run every minute
def update_current_cases():
    try:
        request = requests.get("https://covid19.xtrp.io/server/get_total_cases.php")
        if(request.status_code == 200):
            print(request.text)
        else:
            print("ERROR: " + str(request.status_code))
    except:
        print("ERROR")

# run function initially
update_current_cases()

# start and run cronjob
schedule.every(5).minutes.do(update_current_cases)

while True:
    schedule.run_pending()
    sleep(20)
