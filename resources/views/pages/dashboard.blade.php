<x-app-layout>
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
                        class="icon icon-tabler icons-tabler-outline icon-tabler-home-infinity"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M19 14v-2h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h2.5"
                        />
                        <path
                            d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 1.75 1.032"
                        />
                        <path
                            d="M15.536 17.586a2.123 2.123 0 0 0 -2.929 0a1.951 1.951 0 0 0 0 2.828c.809 .781 2.12 .781 2.929 0c.809 -.781 -.805 .778 0 0l1.46 -1.41l1.46 -1.419"
                        />
                        <path
                            d="M15.54 17.582l1.46 1.42l1.46 1.41c.809 .78 -.805 -.779 0 0s2.12 .781 2.929 0a1.951 1.951 0 0 0 0 -2.828a2.123 2.123 0 0 0 -2.929 0"
                        />
                    </svg>
                </div>
                <p class="text font-bold">Dashboard</p>
            </div>
            {{--
                <a href="{{ route("incubator.create") }}" class="btn-primary">
                Tambah
                </a>
            --}}
        </div>

        <div class="flex gap-5">
            <div class="basis-1/4 border rounded shadow-md p-8">
                <div class="w-[40px] flex items-center justify-center h-[40px] rounded-full bg-red-100">
                    <i class="fa-solid text-[25px] fa-temperature-three-quarters"></i>
                </div>
                <p class="mt-5">Temperature</p>
                <p class="text-4xl font-semibold text-red-600">30 C</p>
                <p class="text-sm mt-3">20 - Oct - 2022 12:00 AM</p>
            </div>
            <div class="basis-1/4 border rounded shadow-md p-8">
                <div class="w-[40px] flex items-center justify-center h-[40px] rounded-full bg-red-100">
                    <i class="fa-solid text-[25px] fa-temperature-three-quarters"></i>
                </div>
                <p class="mt-5">Temperature</p>
                <p class="text-4xl font-semibold text-red-600">30 C</p>
                <p class="text-sm mt-3">20 - Oct - 2022 12:00 AM</p>
            </div>
            <div class="basis-1/4 border rounded shadow-md p-8">
                <div class="w-[40px] flex items-center justify-center h-[40px] rounded-full bg-red-100">
                    <i class="fa-solid text-[25px] fa-temperature-three-quarters"></i>
                </div>
                <p class="mt-5">Temperature</p>
                <p class="text-4xl font-semibold text-red-600">30 C</p>
                <p class="text-sm mt-3">20 - Oct - 2022 12:00 AM</p>
            </div>
            <div class="basis-1/4 border rounded shadow-md p-8">
                <div class="w-[40px] flex items-center justify-center h-[40px] rounded-full bg-red-100">
                    <i class="fa-solid text-[25px] fa-temperature-three-quarters"></i>
                </div>
                <p class="mt-5">Temperature</p>
                <p class="text-4xl font-semibold text-red-600">30 C</p>
                <p class="text-sm mt-3">20 - Oct - 2022 12:00 AM</p>
            </div>
        </div>
    </div>
</x-app-layout>
