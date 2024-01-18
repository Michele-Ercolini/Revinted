<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Logo --}}
    <link rel="icon" type="image/x-icon" href="./media/R_Color_no_background.png">

    <title>Revinted</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar/>
    {{$slot}}

    @vite('resources/js/app.js')
</body>
</html>