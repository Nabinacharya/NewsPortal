<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <x-frontend-header> </x-frontend-header>
    <main>
        {{ $slot }}
    </main>
    <x-frontend-footer> </x-frontend-footer>

</body>

</html>
