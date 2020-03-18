import schedule
import requests
from datetime import date, datetime
from time import gmtime, strftime, sleep

def update_current_cases():
    request = requests.get("http://localhost:7001/")
    if(request.status_code == 200):
        finalRequest = requests.get("http://localhost:7000/get_live_updates.php?src=" + request.text)
        if(finalRequest.status_code == 200):
            print("Success " + request.text)
        else:
            print("ERROR: " + str(finalRequest.status_code))
    else:
        print("ERROR: " + str(request.status_code))

schedule.every(10).minutes.do(update_current_cases)

while True:
    schedule.run_pending()
    sleep(30)
