<?php
header("Access-Control-Allow-Origin: https://wormate.io");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json; charset=UTF-8");

try {
    $file = 'api/skins.json';
    $json = file_get_contents($url);
    
    if ($json === false) {
        throw new Exception('Failed to fetch data from URL');
    }
    
    if (json_decode($json) === null && json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Invalid JSON format');
    }
    
    echo $json;
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
