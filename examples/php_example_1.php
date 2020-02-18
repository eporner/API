<?php 
function EpornerAPICall($api_url, $params) {
    $url = $api_url . '?' . http_build_query($params);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $results = curl_exec($ch); 
    curl_close($ch);
    return $results;
}

function getEpornerVideos($page = 0, $query = 'all') {
    $api_url = 'https://www.eporner.com/api/v2/video/search/';
    $params = array(
        'query' => $query,
        'page' => $page
    );
    
    $response = EpornerAPICall($api_url, $params);
    
    if($response) {
        $json = json_decode($response);
        return $json;
    }
    return false;
}

$page = 1; //start from first page
$total_pages = 1; //will be set to real value after success API call
$max_videos_to_fetch = 50; //limit max videos to fetch in loop
$fetched_videos = 0; //internal counter

do {
    $apiResponse = getEpornerVideos($page, 'anal');
    //you can change 'anal' to any other phrase you would like to search
    if($apiResponse) {
        $videos = $apiResponse->videos;
        $page = $apiResponse->page + 1;
        $total_pages = $apiResponse->total_pages;
        
        foreach($videos as $video) {
            if($fetched_videos >= $max_videos_to_fetch) break;
            
            $fetched_videos++;
            echo 'Video #' . $fetched_videos . PHP_EOL;
            echo $video->id . PHP_EOL;
            echo $video->title . PHP_EOL;
            echo $video->url . PHP_EOL;
            //you can access here all video fields described in Results of ID Method
        }
    } else {
        //we have an error : (
    }
} while ( $page < $total_pages && $fetched_videos < $max_videos_to_fetch );

?>
