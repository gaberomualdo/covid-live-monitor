<?php

$sec_in_day = 86400;

function contains($needle, $haystack) {
  return strpos($haystack, $needle) !== false;
}

include 'api_keys.php';

$url = "https://www.googleapis.com/youtube/v3/search?key=" . $googleAPIKey . "&channelId=UC07-dOwgza1IguKA86jqxNA&part=snippet,id&order=date&maxResults=100";

$resp = file_get_contents($url);

if(!$resp) {
  echo 'Internal server error';
} else {
  // only update max once a day
  if( time() - filemtime("live_updates_data.js") > $sec_in_day ) {
    $respJSON = json_decode($resp, true);
  
    $latestVidId = "";
  
    foreach ($respJSON['items'] as $idx => $item) {
      $itemtitle = strtolower($item['snippet']['title']);
      // not great identification for a press conference, but totally fine if it displays another one of WHOs videos
      // currently the WHO doesn't seem to be totally consistent in how they are showing their press briefings, on YouTube and on their website, so this is adequate for now
      if(contains('briefing', $itemtitle) || contains('press', $itemtitle) || contains('conference', $itemtitle)) {
        $latestVidId = $item['id']['videoId'];
        break;
      }
    }
  
    if(strlen($latestVidId) > 0) {
      file_put_contents("live_updates_data.js", "const liveVideoURL = 'https://www.youtube.com/embed/" . $latestVidId . "';");
      echo "Success: " . $latestVidId;
    } else {
      echo "Latest press video not found";
    }
  } else {
    echo "Only update once a day at maximum.";
  }
}
?>
