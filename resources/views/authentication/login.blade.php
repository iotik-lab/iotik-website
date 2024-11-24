<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IoTIK - Penetas Itik</title>
    {{-- font awesome icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
</head>

<body class="h-[100vh] bg-gradient-to-t from-[#FF8A02] to-[#FFD749]">
    <div class="absolute bottom-28 left-28 ">
        <img src="image/login.png" class="w-[600px]" alt="">
    </div>
    <div class="flex">
        <div class="basis-1/3 py-8 px-5">
            <img src="image/logo.png" class="w-[180px]" alt="">
            <p class="px-5 py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro veniam inventore
                adipisci enim aspernatur tempore aut fugiat consequatur ex laboriosam!</p>
        </div>
        <div class="basis-2/3 h-[100vh] flex justify-center items-center rounded-l-[50px] bg-white">
            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="w-[500px]">
                    @error('err')
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Danger alert!</span> {{ $message }}
                            </div>
                        </div>
                    @enderror
                    <p class="mb-20 font-bold text-[28px]">Login to your account</p>
                    <div class="flex mb-4 flex-col">
                        <label class="mb-2 text font-semibold" for="email">Email</label>
                        <input type="text" name="email" class="border rounded-lg p-3 bg-slate-100"
                            placeholder="Email">
                        @error('email')
                            <small class="text text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="mb-2 text font-semibold">Password</label>
                        <input type="password" name="password" class="border rounded-lg p-3 bg-slate-100"
                            placeholder="Password">
                            @error('password')
                            <small class="text text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <button class="mt-12 bg-[#FF8A02] text-white font-semibold p-3 rounded-lg w-full"
                        type="submit">Login</button>
                    <button class="border mt-2 font-semibold p-3 rounded-lg w-full "><i class="fa-brands fa-google"></i>
                        Login With Google</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
