<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Benvenuto su Laravel</h1>
        <h2>Elenco dei progetti:</h2>
        @if (isset($projects))
            <pre>{{ dd($projects) }}</pre>
        @else
            <p>Nessun progetto disponibile</p>
        @endif
    </div>
</body>


</html>
