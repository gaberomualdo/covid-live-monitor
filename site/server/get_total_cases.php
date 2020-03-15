<?php
require('simple_html_dom.php');

// scrape data from worldometers
$html = file_get_html('https://www.worldometers.info/coronavirus/');

$number = $html->find('.maincounter-number > span')[0]->innertext;
$number = str_replace(',', '', $number);
$number = str_replace(' ', '', $number);

file_put_contents("current_cases_data.js", "const totalCurrentCases = '" . $number . "';\nconst totalCurrentCasesLastUpdated = '" . (date("c")) . "';\n");

echo "Success (" . $number . " total cases).";
?>
