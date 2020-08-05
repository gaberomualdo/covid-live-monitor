"""
This file runs a basic cronjob every day to send a request to a PHP server
that gets and updates the current live WHO video.
"""

import schedule
import requests
from datetime import date, datetime
from time import gmtime, strftime, sleep

countries = ["ae","ar","at","au","be","bg","br","ca","ch","cn","co","cu","cz","de","eg","fr","gb","gr","hk","hu","id","ie","il","in","it","jp","kr","lt","lv","ma","mx","my","ng","nl","no","nz","ph","pl","pt","ro","rs","ru","sa","se","sg","si","sk","th","tr","tw","ua","us","ve","za"];

# function to be run every minute
def live_updates():
      request = requests.get("https://covid19.xtrp.io/server/get_live_updates.php")
      if(request.status_code == 200):
        print('Successful request with message: ' + request.text)
      else:
        print("ERROR: " + str(request.status_code))

# run function initially
live_updates()

# start and run cronjob
schedule.every().day.at("12:00").do(live_updates)

while True:
  schedule.run_pending()
  sleep(20)