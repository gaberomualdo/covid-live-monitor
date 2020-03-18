<?php
// dumps video source from GET variable into JS file for site
if(isset($_GET) && isset($_GET["src"])) {
    $src = $_GET["src"];
    file_put_contents("live_updates_data.js", "const liveVideoURL = '" . $src . "';");
    echo "Success: " . $src . ").";
}else {
    echo "Failure: video source not given";
}
?>
