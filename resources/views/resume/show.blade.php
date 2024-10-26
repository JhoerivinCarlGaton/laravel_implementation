<!-- resources/views/resume/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
</head>
<body>
    <h1>{{ $resume->name }}</h1>
    <p><strong>Email:</strong> {{ $resume->email }}</p>
    <p><strong>Address:</strong> {{ $resume->address }}</p>
    <p><strong>Phone:</strong> {{ $resume->phone }}</p>

    <h2>Education</h2>
    <p>{{ $resume->education }}</p>

    <h2>Experience</h2>
    <p>{{ $resume->experience }}</p>
</body>
</html>
