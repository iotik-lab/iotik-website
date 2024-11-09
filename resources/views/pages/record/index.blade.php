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
                        class="icon icon-tabler icons-tabler-outline icon-tabler-package-import"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" />
                        <path d="M12 12l8 -4.5" />
                        <path d="M12 12v9" />
                        <path d="M12 12l-8 -4.5" />
                        <path d="M22 18h-7" />
                        <path d="M18 15l-3 3l3 3" />
                    </svg>
                </div>
                <p class="text font-bold">Incubator</p>
            </div>
            <a href="{{ route("incubator.create") }}" class="btn-primary">
                Tambah
            </a>
        </div>
        <table
            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            id="datatable"
        >
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Start Date</th>
                    <th scope="col" class="px-6 py-3">Egg Total</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($incubators as $incubator)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                    >
                        <th
                            scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            {{ $incubator["name"] }}
                        </th>
                        <td class="px-6 py-4">{{ $incubator["status"] }}</td>
                        <td class="px-6 py-4">
                            {{ $incubator["start_date"] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $incubator["egg_total"] }} Telur
                        </td>
                        <td class="px-6 py-4 flex">
                            <form
                                action="{{ route("incubator.destroy", $incubator["id"]) }}"
                                method="POST"
                            >
                                @csrf
                                @method("DELETE")
                                <button
                                    onclick="return confirm('are sure to delete')"
                                    class="font-medium me-2 text-white rounded p-2 bg-red-600 inline-block dark:text-blue-500 hover:underline"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"
                                        />
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path
                                            d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"
                                        />
                                        <path
                                            d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"
                                        />
                                    </svg>
                                </button>
                            </form>

                            <a
                                href="{{ route("incubator.edit", $incubator["id"]) }}"
                                class="font-medium text-white rounded p-2 bg-orange-400 inline-block dark:text-blue-500 hover:underline"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
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
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>

    @push("script")
        <script>
            let table = new DataTable('#datatable')
        </script>
    @endpush
</x-app-layout>
