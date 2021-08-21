<?php
    $api_url = 'https://imdb-api.com/en/API/Top250Movies/k_quzyc85y';
    
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);

    $topten_data = $response_data->items;
    $topten_data = array_slice($topten_data, 0, 10);
    
    $toptwenty_data = $response_data->items;
    $toptwenty_data = array_slice($toptwenty_data, 10, 10);
?>