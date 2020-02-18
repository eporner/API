<?php 
function EpornerAPICall($api_url, $params) {
    $url = $api_url . '?' . http_build_query($params);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $results = curl_exec($ch); 
    curl_close($ch);
    return $results;
}

function getEpornerVideoById($id, $thumbsize = 'medium', $format = 'json') {
    $api_url = 'https://www.eporner.com/api/v2/video/id/';
    $params = array(
        'id' => $id,
        'thumbsize' => $thumbsize,
        'format' => $format
    );
    
    $response = EpornerAPICall($api_url, $params);
    
    if($response) {
        $json = json_decode($response);
        return $json;
    }
    return false;
}


$video = getEpornerVideoById('ozKfC3UC2Wl', 'medium'); // id 'ozKfC3UC2Wl' and thumb size medium
if($video) {
    echo 'Video ID: ' . $video->id . PHP_EOL;
    echo 'Video title: ' . $video->title . PHP_EOL;
    echo 'Video keywords: ' . $video->keywords . PHP_EOL;
    echo 'Video views: ' . $video->views . PHP_EOL;
    echo 'Video rate: ' . $video->rate . PHP_EOL;
    echo 'Video url: ' . $video->url . PHP_EOL;
    echo 'Video added: ' . $video->added . PHP_EOL;
    echo 'Video length_sec: ' . $video->length_sec . PHP_EOL;
    echo 'Video length_min: ' . $video->length_min . PHP_EOL;
    echo 'Video embed: ' . $video->embed . PHP_EOL;
    echo 'Video default_thumb size: ' . $video->default_thumb->size . PHP_EOL;
    echo 'Video default_thumb width: ' . $video->default_thumb->width . PHP_EOL;
    echo 'Video default_thumb height: ' . $video->default_thumb->height . PHP_EOL;
    echo 'Video default_thumb src: ' . $video->default_thumb->src . PHP_EOL;
    foreach($video->thumbs as $thumb_num => $thumb) {
        echo 'Thumb #' . $thumb_num . ' Size: '.$thumb->size . ' Width: '.$thumb->width . ' Height: '.$thumb->height . ' Src: '.$thumb->src . PHP_EOL;
    }
} else {
    //we have an error : (
}

?>
