<?php

$api_key = "ENTER_YOUR_API_KEY_HERE";

$url = "https://api.transcriptyt.com/api/v1/transcript";

$headers = [
    "Content-Type: application/json",
    "Authorization: Bearer $api_key"
];

$data = [
    "video_id" => $_POST['video_id'],
    "languages" => ["en","ar"],
    "transcript_type" => "generated",
    "format" => "srt"
];

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

$fopen = fopen("../SRT.srt","w+");
fwrite($fopen,$response);
fclose($fopen);


?>