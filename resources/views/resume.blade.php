<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
</head>
<body>
    <h1>{{ $resume->name }}</h1>
    <p>Email: {{ $resume->email }}</p>
    <p>Address: {{ $resume->address }}</p>
    <p>Phone: {{ $resume->phone }}</p>
</body>
</html>
