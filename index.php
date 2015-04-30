<?php
    define('ERROR_MSG', "An error occured. Please notify `it at entrepreneur-club.org`\n");
    define('DEFAULT_URL', 'http://entrepreneur-club.org/');
    define('NOTFOUND_URL', 'http://entrepreneur-club.org/notfound');

    @$file = file('urls.txt') or die(ERROR_MSG);
    $urls = array();
    foreach($file as $line) {
        $line = trim($line);
        if(empty($line) or $line[0] == '#') {
            continue;
        }
        $split = explode(':', $line, 2);
        $urls[trim($split[0])] = trim($split[1]);
    }

    $key = $_GET['url'];
    if(array_key_exists($key, $urls)) {
        $url = $urls[$key];
    } elseif(empty($key)) {
        $url = DEFAULT_URL;
    } else{
        $url = NOTFOUND_URL;
    }

    header("Location: " . $url);
?>
