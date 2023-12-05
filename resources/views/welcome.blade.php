<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(["assets/css/bootstrap.css","assets/css/animate.css","assets/css/style-en.css","assets/css/ani.css","resources/css/app.css"])
    @php
        $mainColor = $whiteLabel['mainColor'] ?? '#6900ff';
    @endphp
</head>

<body>
    <div id="app"></div>
    @vite(["assets/js/jquery-2.2.4.min.js","assets/js/main.js","assets/js/bootstrap.min.js"])
    @vite("resources/js/app.js")
</body>
<style>
 :root {
        --main-color: {{ $mainColor }}
    }
</style>
</html>