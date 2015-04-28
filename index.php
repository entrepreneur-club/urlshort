<?php

define('DEFAULT_URL', 'http://entrepreneur-club.org/');
define('NOTFOUND_URL', 'http://entrepreneur-club.org/notfound');

$urls = array(
    'ssd' => 'http://ssd.entrepreneur-club.org/',
    'blog' => 'http://blog.entrepreneur-club.org/'
);

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
