<x-app-layout>
    <style>
        .ping {
            width: 30px;
            height: 30px;
            /* background-color: #f44336; */
            border-radius: 50%;
            position: relative;
            animation: ping 1s infinite;
        }

        @keyframes ping {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            75% {
                transform: scale(1.5);
                opacity: 0;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }
    </style>
    @if (session()->has("success"))
        <div
            id="sticky-banner"
            tabindex="-1"
            class="mb-3 z-50 flex justify-between w-full p-4 border-gray-200 bg-green-50 dark:bg-gray-700 dark:border-gray-600"
        >
            <div class="flex items-center mx-auto">
                <p
                    class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400"
                >
                    <span
                        class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center flex-shrink-0"
                    >
                        <svg
                            class="w-3 h-3 text-gray-500 dark:text-gray-400"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            viewBox="0 0 18 19"
                        >
                            <path
                                d="M15 1.943v12.114a1 1 0 0 1-1.581.814L8 11V5l5.419-3.871A1 1 0 0 1 15 1.943ZM7 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4ZM4 17v-5h1v5H4ZM16 5.183v5.634a2.984 2.984 0 0 0 0-5.634Z"
                            />
                        </svg>
                        <span class="sr-only">Light bulb</span>
                    </span>
                    <span>
                        {{ session()->get("success") }}
                    </span>
                </p>
            </div>

            <div class="flex items-center">
                <button
                    data-dismiss-target="#sticky-banner"
                    type="button"
                    class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <svg
                        class="w-3 h-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 14"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                        />
                    </svg>
                    <span class="sr-only">Close banner</span>
                </button>
            </div>
        </div>
    @endif

    <div class="relative overflow-x-auto bg-white p-5 shadow-md sm:rounded-lg">
        <div class="flex justify-between mb-5 items-center">
            <div class="flex items-center gap-5">
                <div class="p-2 bg-primary rounded text-white">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-router"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M3 13m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"
                        />
                        <path d="M17 17l0 .01" />
                        <path d="M13 17l0 .01" />
                        <path d="M15 13l0 -2" />
                        <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />
                        <path d="M8.5 6.5a8 8 0 0 1 13 0" />
                    </svg>
                </div>
                <p class="text font-bold">Devices</p>
            </div>
            {{--
                <a href="{{ route("incubator.create") }}" class="btn-primary">
                Tambah
                </a>
            --}}
        </div>

        <div class="flex gap-5 flex-wrap">
            @for ($i = 0; $i < 2; $i++)
                <div class="w-[300px] rounded-md shadow-sm bg-yellow-50">
                    <h1 class="text-center text-[25px] font-[700] mt-5">
                        Nama Incubator
                    </h1>
                    <div class="flex justify-center gap-6 mt-4">
                        <div class="flex gap-3 items-center">
                            <div class="p-2 bg-red-100 rounded">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-red-700"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-temperature-sun"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path
                                        d="M4 13.5a4 4 0 1 0 4 0v-8.5a2 2 0 1 0 -4 0v8.5"
                                    />
                                    <path d="M4 9h4" />
                                    <path
                                        d="M13 16a4 4 0 1 0 0 -8a4.07 4.07 0 0 0 -1 .124"
                                    />
                                    <path d="M13 3v1" />
                                    <path d="M21 12h1" />
                                    <path d="M13 20v1" />
                                    <path d="M19.4 5.6l-.7 .7" />
                                    <path d="M18.7 17.7l.7 .7" />
                                </svg>
                            </div>
                            <p class="font-[700]">33.00 C</p>
                        </div>
                        <div class="flex gap-3 items-center">
                            <div class="p-2 bg-blue-100 rounded">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-blue-700"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-sun-wind"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path
                                        d="M14.468 10a4 4 0 1 0 -5.466 5.46"
                                    />
                                    <path d="M2 12h1" />
                                    <path d="M11 3v1" />
                                    <path d="M11 20v1" />
                                    <path d="M4.6 5.6l.7 .7" />
                                    <path d="M17.4 5.6l-.7 .7" />
                                    <path d="M5.3 17.7l-.7 .7" />
                                    <path d="M15 13h5a2 2 0 1 0 0 -4" />
                                    <path
                                        d="M12 16h5.714l.253 0a2 2 0 0 1 2.033 2a2 2 0 0 1 -2 2h-.286"
                                    />
                                </svg>
                            </div>
                            <p class="font-[800]">33.00 C</p>
                        </div>
                    </div>
                    <div class="flex justify-center mt-3">
                        <div class="flex gap-3 items-center">
                            <div class="p-2 bg-yellow-100 rounded">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-yellow-600"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-bulb"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path
                                        d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7"
                                    />
                                    <path
                                        d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3"
                                    />
                                    <path d="M9.7 17l4.6 0" />
                                </svg>
                            </div>
                            <p class="font-[800]">Hidup</p>
                        </div>
                    </div>
                    <div class="p-5">
                        <div
                            class="flex justify-between items-center bg-asd bg-white mb-3 rounded p-3 w-[100%]"
                        >
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-green-100">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-router"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"
                                        />
                                        <path
                                            d="M3 13m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"
                                        />
                                        <path d="M17 17l0 .01" />
                                        <path d="M13 17l0 .01" />
                                        <path d="M15 13l0 -2" />
                                        <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />
                                        <path d="M8.5 6.5a8 8 0 0 1 13 0" />
                                    </svg>
                                </div>
                                <p class="text font-[500]">Nama alat</p>
                            </div>

                            <div class="relative">
                                <div class="ping bg-green-300"></div>
                                <span
                                    class="w-[20px] h-[20px] bottom-[5px] right-[5px] rounded-full bg-green-500 inline-block absolute"
                                ></span>
                            </div>
                        </div>
                        <div
                            class="flex justify-between items-center bg-asd bg-white mb-3 rounded p-3 w-[100%]"
                        >
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-red-100">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        class="text-red-600"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-router"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"
                                        />
                                        <path
                                            d="M3 13m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"
                                        />
                                        <path d="M17 17l0 .01" />
                                        <path d="M13 17l0 .01" />
                                        <path d="M15 13l0 -2" />
                                        <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />
                                        <path d="M8.5 6.5a8 8 0 0 1 13 0" />
                                    </svg>
                                </div>
                                <p class="text font-[500]">Nama alat</p>
                            </div>

                            <div class="relative">
                                <div class="ping bg-red-300"></div>
                                <span
                                    class="w-[20px] h-[20px] bottom-[5px] right-[5px] rounded-full bg-red-500 inline-block absolute"
                                ></span>
                            </div>
                        </div>
                        <div
                            class="flex justify-between items-center bg-asd bg-white mb-3 rounded p-3 w-[100%]"
                        >
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-red-100">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        class="text-red-600"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-router"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"
                                        />
                                        <path
                                            d="M3 13m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"
                                        />
                                        <path d="M17 17l0 .01" />
                                        <path d="M13 17l0 .01" />
                                        <path d="M15 13l0 -2" />
                                        <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />
                                        <path d="M8.5 6.5a8 8 0 0 1 13 0" />
                                    </svg>
                                </div>
                                <p class="text font-[500]">Nama alat</p>
                            </div>

                            <div class="relative">
                                <div class="ping bg-red-300"></div>
                                <span
                                    class="w-[20px] h-[20px] bottom-[5px] right-[5px] rounded-full bg-red-500 inline-block absolute"
                                ></span>
                            </div>
                        </div>
                        <div class="flex justify-center gap-5 mt-3 w-[100%]">
                            <form action="" method="POST">
                                @csrf
                                @method("DELETE")
                                <button
                                    onclick="return confirm('are sure to delete')"
                                    class="font-medium me-2 text-white rounded p-2 bg-green-100 inline-block dark:text-blue-500 hover:underline"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-green-600"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-plus"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"
                                        />
                                        <path d="M12 5l0 14" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                </button>
                            </form>

                            <a
                                href=""
                                class="font-medium text-white rounded p-2 bg-orange-100 inline-block dark:text-blue-500 hover:underline"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="text-orange-600"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-edit"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path
                                        d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"
                                    />
                                    <path
                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"
                                    />
                                    <path d="M16 5l3 3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</x-app-layout>
