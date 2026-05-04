<?php
// WAJIB: paksa output sebagai JSON
header("Content-Type: application/json; charset=UTF-8");

// endpoint Supabase
$url = "https://udkmzwpmdaecbbiiotkx.supabase.co/rest/v1/mahasiswa?select=*";

//PENTING: ganti dengan ANON KEY (jangan service_role)
$apiKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVka216d3BtZGFlY2JiaWlvdGt4Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3Nzc5MzUxNDMsImV4cCI6MjA5MzUxMTE0M30.Okvt9d80VHv--7uF36VVPlS2K2VjHkdhWfuokwzquvo";

// set header request ke Supabase
$options = [
    "http" => [
        "method" => "GET",
        "header" => [
            "apikey: $apiKey",
            "Authorization: Bearer $apiKey",
            "Accept: application/json"
        ]
    ]
];

// eksekusi request
$context = stream_context_create($options);
$response = @file_get_contents($url, false, $context);

// handle error
if ($response === FALSE) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Gagal mengambil data dari Supabase"
    ]);
    exit;
}

// decode & encode ulang (optional tapi lebih aman)
$data = json_decode($response, true);

// kalau kosong
if (empty($data)) {
    echo json_encode([
        "status" => "success",
        "data" => [],
        "message" => "Data kosong"
    ], JSON_PRETTY_PRINT);
} else {
    echo json_encode([
        "status" => "success",
        "data" => $data
    ], JSON_PRETTY_PRINT);
}
?>
