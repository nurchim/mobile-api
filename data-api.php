<?php
header("Content-Type: application/json");

$url = "https://udkmzwpmdaecbbiiotkx.supabase.co/rest/v1/mahasiswa?select=*";

$apiKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVka216d3BtZGFlY2JiaWlvdGt4Iiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTc3NzkzNTE0MywiZXhwIjoyMDkzNTExMTQzfQ.zJ8FqVAX7I0WQDZXdWkwlhfpMqKJhCJ421vi2DSi0mU";

$options = [
    "http" => [
        "header" => [
            "apikey: $apiKey",
            "Authorization: Bearer $apiKey"
        ]
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo $result;
