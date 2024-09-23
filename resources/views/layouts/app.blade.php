<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
            rel="stylesheet"
        />
        @vite("resources/css/app.css")
    </head>
    <body class="bg-slate-50">
        <x-navbar />
        <x-sidebar />
        <div class="p-4 mt-14 sm:ml-64">
            {{ $slot }}
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
        @vite("resources/js/app.js")
        @stack("script")
    </body>
</html>
