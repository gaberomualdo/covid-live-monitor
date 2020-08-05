<?php

header('Content-Type: application/json');

$sec_in_day = 86400;

include 'api_keys.php';

$countries = ["ae","ar","at","au","be","bg","br","ca","ch","cn","co","cu","cz","de","eg","fr","gb","gr","hk","hu","id","ie","il","in","it","jp","kr","lt","lv","ma","mx","my","ng","nl","no","nz","ph","pl","pt","ro","rs","ru","sa","se","sg","si","sk","th","tr","tw","ua","us","ve","za"];

if(isset($_GET) && isset($_GET['country']) && in_array($_GET['country'], $countries)) {
  $country = $_GET['country'];
  
  $fromCache = true;
  if(isset($_GET['fromcache']) && $_GET['fromcache'] == 'false') {
    $fromCache = false;
  }
  
  if($fromCache) {
    $url = 'news_content/' . $country . '.json';
    $resp = file_get_contents($url);
    if(!$resp) {
      echo 'Bad Request';
    } else {
      echo $resp;
    }
  } else {
    // only send API request for each country once a day
    if(time() - filemtime('news_content/' . $country . '.json') > $sec_in_day) {
      $url = 'https://newsapi.org/v2/top-headlines?country=' . $country . '&q=coronavirus&apiKey=' . $newsAPIKey;
      $resp = file_get_contents($url);
      if(!$resp) {
        echo 'Bad Request';
      } else {
        file_put_contents('news_content/' . $country . '.json', $resp);
        echo $resp;
      }
    } else {
      echo "Only update cache once a day at maximum.";
    }
  }
} else {
  echo 'Bad Request';
}

?>