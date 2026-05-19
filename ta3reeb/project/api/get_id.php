<?php
$video_id = "";
function getYoutubeId($url){

    $host = parse_url($url, PHP_URL_HOST);
    $path = parse_url($url, PHP_URL_PATH);
    $query = [];

    if (!$host) return null;

    // youtu.be
    if (str_contains($host, "youtu.be")) {
        return trim($path, "/");
    }

    // youtube.com
    if (str_contains($host, "youtube.com")) {
        parse_str(parse_url($url, PHP_URL_QUERY), $query);
        return $query['v'] ?? null;
    }

    return null;
}
if ($_SERVER['REQUEST_METHOD'] === "GET") {

    if (isset($_GET['url'])) {

        $video_id = getYoutubeId($_GET['url']);
        echo $video_id;
    }
}
?>