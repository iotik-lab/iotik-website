<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        @vite("resources/css/app.css")
    </head>
    <body class="bg-slate-50">
        <x-navbar />
        <x-sidebar />
        <div class="p-4 mt-14 sm:ml-64">
            {{ $slot }}
        </div>
    </body>
</html>
