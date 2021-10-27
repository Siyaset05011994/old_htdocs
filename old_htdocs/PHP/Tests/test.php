<?php

include('../Limak_Task/simple_html_dom/simple_html_dom.php');

$the_url = 'https://oxu.az/society/407386';

// Read 444 characters starting from the 1st character
$section = file_get_contents($the_url, NULL, NULL, 0, 444);
$html = str_get_html($section);

if (!$e = $html->find('title', 0)) {
    // Read 444 characters starting from the 445th character
    $section = file_get_contents($the_url, NULL, NULL, 444, 888);
    $html = str_get_html($section);
    $e = $html->find('title', 0);
}

$title = $e->innertext;
echo $title . '<br><br>';



