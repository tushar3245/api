$headers = @{
    "Authorization" = "Bearer <your_token_here>"
}

$response = Invoke-RestMethod -Uri "http://localhost:8000/data" -Method Get -Headers $headers

$response

