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

    <form
        class="relative overflow-x-auto bg-white p-5 shadow-md sm:rounded-lg"
        method="POST"
    >
        @csrf
        <div class="flex justify-between mb-5 items-center">
            <div class="flex items-center gap-5">
                <div class="p-2 bg-primary rounded text-white">
                    <i class="fa-solid fa-gears"></i>
                </div>
                <p class="text font-bold">Setting</p>
            </div>
        </div>

        <div class="mt-10 flex justify-between gap-7 flex-col lg:flex-row">
            <div class="border bg-white shadow-lg rounded-lg px-2 py-3 w-full">
                <p class="m-0 text-center font-bold mb-5">Temperature (°C)</p>

                <div class="flex justify-center items-center gap-10 mt-4">
                    <div class="flex justify-center flex-col items-center">
                        <input
                            type="text"
                            class="text-3xl p-0 text-center border-4 border-orange-400 w-24 rounded-lg py-4"
                            value="{{ settings("temp.min") ?? 37 }}"
                            name="temp[min]"
                        />
                        <p class="m-0 mt-1 text-sm">Minimal</p>
                    </div>

                    <div class="flex justify-center flex-col items-center">
                        <input
                            type="text"
                            class="text-3xl p-0 text-center border-4 border-orange-400 w-24 rounded-lg py-4"
                            value="{{ settings("temp.max") ?? 39 }}"
                            name="temp[max]"
                        />
                        <p class="m-0 mt-1 text-sm">Maksimal</p>
                    </div>
                </div>
            </div>

            <div class="border bg-white shadow-lg rounded-lg px-2 py-3 w-full">
                <p class="m-0 text-center font-bold">Kelembaban (%)</p>

                <div class="flex justify-center items-center gap-10 mt-4">
                    <div class="flex justify-center flex-col items-center">
                        <input
                            type="text"
                            class="text-3xl p-0 text-center border-4 border-orange-400 w-24 rounded-lg py-4"
                            value="{{ settings("humi.min") ?? 55 }}"
                            name="humi[min]"
                        />
                        <p class="m-0 mt-1 text-sm">Minimal</p>
                    </div>

                    <div class="flex justify-center flex-col items-center">
                        <input
                            type="text"
                            class="text-3xl p-0 text-center border-4 border-orange-400 w-24 rounded-lg py-4"
                            value="{{ settings("humi.max") ?? 70 }}"
                            name="humi[max]"
                        />
                        <p class="m-0 mt-1 text-sm">Maksimal</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <button
                type="submit"
                class="bg-orange-400 px-4 py-2 rounded-lg text-white font-bold"
            >
                Simpan
            </button>
        </div>
    </form>

    @push("script")
        <script>
            let table = new DataTable('#datatable')
        </script>
    @endpush
</x-app-layout>
