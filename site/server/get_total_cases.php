<?php
require('simple_html_dom.php');

// scrape data from worldometers
$html = file_get_html('https://www.worldometers.info/coronavirus/');

$spans = ($html->find('.maincounter-number > span'));

if(array_key_exists(0, $spans)) {
    $number = $spans[0]->innertext;
    $number = str_replace(',', '', $number);
    $number = str_replace(' ', '', $number);

    $deathsnumber = $spans[1]->innertext;
    $deathsnumber = str_replace(',', '', $deathsnumber);
    $deathsnumber = str_replace(' ', '', $deathsnumber);

    $recoveriesnumber = $spans[2]->innertext;
    $recoveriesnumber = str_replace(',', '', $recoveriesnumber);
    $recoveriesnumber = str_replace(' ', '', $recoveriesnumber);

    if(is_numeric($number) && is_numeric($deathsnumber) && is_numeric($recoveriesnumber)) {
        file_put_contents("current_cases_data.js", "const totalCurrentCases = '" . $number . "';\nconst totalDeaths = '" . $deathsnumber . "';\nconst totalRecoveries = '" . $recoveriesnumber . "';\nconst totalCurrentCasesLastUpdated = '" . (date("c")) . "';\n");
        echo "Success (" . $number . " total cases).";
    }else {
        echo "Failure.";
    }
}else {
    var_dump($spans);
    echo "Failure: [0] index does not exist";
}
?>
