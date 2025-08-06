<?php
header("Content-Type: application/json");

$data = [
    "status" => "success",
    "message" => "Добро пожаловать в PHP API!",
    "data" => [
        "id" => 1,
        "name" => "Test User"
    ]
];

echo json_encode($data);
?>
