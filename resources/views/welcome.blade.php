<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
</head>

<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Benvenuto su Laravel</h1>
        <h2>Elenco dei progetti:</h2>
        <ul>
            @foreach ($projects as $project)
                <li>{{ $project->name }}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>
