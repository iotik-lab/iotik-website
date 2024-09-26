<x-app-layout>
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

        <div class="flex justify-between flex-wrap">
            <div class="w-[410px] rounded-md shadow-sm bg-yellow-50 h-[500px]">
                <div class="flex items-center justify-center h-40">
                    <img src="" alt="" />
                </div>
                <div
                    class="absolute shadow-lg w-[380px] top-[220px] left-9 rounded-md h-16 bg-white"
                >
                    <h1 class="text mt-3 text-center text-[25px]">
                        Nama Incubator
                    </h1>
                </div>
                <div
                    class="flex items-center justify-center h-[100%] rounded-t-[50px] rounded bg-white shadow-md"
                >
                    <h1 class="text text-[30px]">Nama Incubator</h1>
                </div>
            </div>
            <div
                class="w-[410px] rounded-md shadow-sm bg-yellow-50 h-[700px]"
            ></div>
            <div
                class="w-[410px] rounded-md shadow-sm bg-yellow-50 h-[700px]"
            ></div>
        </div>
    </div>
</x-app-layout>
