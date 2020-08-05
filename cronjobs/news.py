"""
This file runs a basic cronjob every day to send a request to a PHP server
that gets and updates the current total case count.
"""

import schedule
import requests
from datetime import date, datetime
from time import gmtime, strftime, sleep

countries = ["ae","ar","at","au","be","bg","br","ca","ch","cn","co","cu","cz","de","eg","fr","gb","gr","hk","hu","id","ie","il","in","it","jp","kr","lt","lv","ma","mx","my","ng","nl","no","nz","ph","pl","pt","ro","rs","ru","sa","se","sg","si","sk","th","tr","tw","ua","us","ve","za"];

# function to be run every minute
def update_news():
  for country in countries:
    try:
      request = requests.get("https://covid19.xtrp.io/server/news.php?country=" + country + "&fromcache=false")
      if(request.status_code == 200):
        print('Finished country code ' + country)
      else:
        print("ERROR: " + str(request.status_code))
    except:
      print("ERROR")

# run function initially
update_news()

# start and run cronjob
schedule.every().day.at("12:00").do(update_news)

while True:
  schedule.run_pending()
  sleep(20)