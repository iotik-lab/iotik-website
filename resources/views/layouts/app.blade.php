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
            href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"
            rel="stylesheet"
        />

        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
            rel="stylesheet"
        />

        {{-- font awesome icon --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite("resources/css/app.css")
    </head>
    <body class="bg-slate-50">
        <div
            id="pageLoader"
            class="page-loader"
            style="
                inset: 0;
                background-color: #ddd;
                display: flex;
                justify-content: center;
                align-items: center;
                position: fixed;
                z-index: 9999;
            "
        >
            <div class="loader"></div>
        </div>
        <style>
            /* HTML: <div class="loader"></div> */
            .loader {
                height: 15px;
                aspect-ratio: 5;
                display: grid;
                --_g: no-repeat
                    radial-gradient(farthest-side, #ff8901 94%, #0000);
            }
            .loader:before,
            .loader:after {
                content: '';
                grid-area: 1/1;
                background:
                    var(--_g) left,
                    var(--_g) right;
                background-size: 20% 100%;
                animation: l32 1s infinite;
            }
            .loader:after {
                background:
                    var(--_g) calc(1 * 100% / 3),
                    var(--_g) calc(2 * 100% / 3);
                background-size: 20% 100%;
                animation-direction: reverse;
            }
            @keyframes l32 {
                80%,
                100% {
                    transform: rotate(0.5turn);
                }
            }
        </style>
        <x-navbar />
        <x-sidebar />
        <div class="p-4 mt-16 sm:ml-64">
            {{ $slot }}
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // $("#pageLoader").fadeOut();
                $('#pageLoader').fadeOut('slow')
                // $("#pageLoader").fadeOut(3000);
            })
        </script>
        @vite("resources/js/app.js")
        @stack("script")
    </body>
</html>
