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
    request = requests.get("http://localhost:7000/get_total_cases.php")
    if(request.status_code == 200):
        print(request.text)
    else:
        print("ERROR: " + str(request.status_code))

# run function initially
update_current_cases()

# start and run cronjob
schedule.every(1).minutes.do(update_current_cases)

while True:
    schedule.run_pending()
    sleep(20)
