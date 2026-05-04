<?php
$url = "https://udkmzwpmdaecbbiiotkx.supabase.co/rest/v1/mahasiswa";

$headers = [
    "apikey:eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVka216d3BtZGFlY2JiaWlvdGt4Iiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTc3NzkzNTE0MywiZXhwIjoyMDkzNTExMTQzfQ.zJ8FqVAX7I0WQDZXdWkwlhfpMqKJhCJ421vi2DSi0mU",
    "Authorization:eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVka216d3BtZGFlY2JiaWlvdGt4Iiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTc3NzkzNTE0MywiZXhwIjoyMDkzNTExMTQzfQ.zJ8FqVAX7I0WQDZXdWkwlhfpMqKJhCJ421vi2DSi0mU",
    "Content-Type: application/json"
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
