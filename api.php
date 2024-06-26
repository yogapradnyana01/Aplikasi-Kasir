<?php
header("Content-Type: application/json");

// Function to handle the GET request
function handleGetRequest() {
    $response = array("message" => "Hello, World!");
    echo json_encode($response);
}

// Function to handle the POST request
function handlePostRequest() {
    $input = json_decode(file_get_contents('php://input'), true);
    $response = array("message" => "You sent: " . $input['message']);
    echo json_encode($response);
}

// Determine the request method and route
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($method == 'GET' && $uri == '/api/hello') {
    handleGetRequest();
} elseif ($method == 'POST' && $uri == '/api/echo') {
    handlePostRequest();
} else {
    http_response_code(404);
    echo json_encode(array("message" => "Not Found"));
}
?>
