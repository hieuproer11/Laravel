<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>
    <div class="bonj">
        <h2>
            <b> Bonjour {{$username1}} </b><br>
            <input type="text" placeholder="tapez ton nom"><br>
            <button>Enregistrer</button>
        </h2>
    </div>
</body>
