<?php


# DEFINE NEW URLS HERE
$urls = array(
    # startup speed dating
    'ssd' => 'http://ssd.entrepreneur-club.org/',
    # ec blog
    'blog' => 'http://blog.entrepreneur-club.org/'
);

# CHANGE NOTHING BELOW HERE

define('DEFAULT_URL', 'http://entrepreneur-club.org/');
define('NOTFOUND_URL', 'http://entrepreneur-club.org/notfound');

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
