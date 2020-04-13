<?php
function get_CURL($url)
{

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl,  CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);

  curl_close($curl);

  return json_decode($result, true);

}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC5M2C6OmcKiMzopNcmRz0aw&key=AIzaSyCJtHZfelSn0MRTT2Uo-tRzlW8qLHEtQDE');

$youtubePicture = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$chanelName = $result['items'][0]['snippet']['title'];
$subs = $result['items'][0]['statistics']['subscriberCount'];


//LatesVideo
$videoALL = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCJtHZfelSn0MRTT2Uo-tRzlW8qLHEtQDE&channelId=UC5M2C6OmcKiMzopNcmRz0aw&maxResults=1&order=date&part=snippet';
$result = get_CURL($videoALL);
$idVideo = $result['items'][0]['id']['videoId'];
?>