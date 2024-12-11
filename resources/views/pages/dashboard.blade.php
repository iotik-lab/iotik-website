<x-app-layout>
    <div class="relative overflow-x-auto bg-white p-5 shadow-md sm:rounded-lg">
        <div class="flex justify-between mb-5 items-center">
            <div class="flex items-center gap-5">
                <div class="p-2 bg-primary rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-home-infinity">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19 14v-2h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h2.5" />
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 1.75 1.032" />
                        <path
                            d="M15.536 17.586a2.123 2.123 0 0 0 -2.929 0a1.951 1.951 0 0 0 0 2.828c.809 .781 2.12 .781 2.929 0c.809 -.781 -.805 .778 0 0l1.46 -1.41l1.46 -1.419" />
                        <path
                            d="M15.54 17.582l1.46 1.42l1.46 1.41c.809 .78 -.805 -.779 0 0s2.12 .781 2.929 0a1.951 1.951 0 0 0 0 -2.828a2.123 2.123 0 0 0 -2.929 0" />
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

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
            <!-- Card Item Start -->
            <div class="rounded-sm bg-slate-50 px-7 py-6 shadow-md dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11 w-11 bg-orange-100 items-center justify-center rounded-full bg-meta-2">
                    <svg class="fill-primary dark:fill-white" width="22" height="16" viewBox="0 0 22 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                            fill="" />
                        <path
                            d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                            fill="" />
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            2
                        </h4>
                        <span class="text-sm font-medium">Inkubator</span>
                    </div>

                    <span class="flex items-center gap-1 text-sm font-medium text-green-600">
                        1
                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                fill="" />
                        </svg>
                    </span>
                </div>
            </div>
            <!-- Card Item End -->

            <!-- Card Item Start -->
            <div class="rounded-sm bg-slate-50 px-7 py-6 shadow-md dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11 w-11 bg-orange-100 items-center justify-center rounded-full bg-meta-2">
                    <svg class="fill-primary dark:fill-white" width="22" height="16" viewBox="0 0 22 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                            fill="" />
                        <path
                            d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                            fill="" />
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            4
                        </h4>
                        <span class="text-sm font-medium">Device</span>
                    </div>

                    <span class="flex items-center gap-1 text-sm font-medium text-green-600">
                        0.43%
                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                fill="" />
                        </svg>
                    </span>
                </div>
            </div>
            <!-- Card Item End -->
            <!-- Card Item Start -->
            <div class="rounded-sm bg-slate-50 px-7 py-6 shadow-md dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11 w-11 bg-orange-100 items-center justify-center rounded-full bg-meta-2">
                    <svg class="fill-primary dark:fill-white" width="22" height="16" viewBox="0 0 22 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                            fill="" />
                        <path
                            d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                            fill="" />
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            30
                        </h4>
                        <span class="text-sm font-medium">Telur</span>
                    </div>

                    <span class="flex items-center gap-1 text-sm font-medium text-green-600">
                        0.43%
                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                fill="" />
                        </svg>
                    </span>
                </div>
            </div>
            <!-- Card Item End -->
            <!-- Card Item Start -->
            <div class="rounded-sm bg-slate-50 px-7 py-6 shadow-md dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11 w-11 bg-orange-100 items-center justify-center rounded-full bg-meta-2">
                    <svg class="fill-primary dark:fill-white" width="22" height="16" viewBox="0 0 22 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                            fill="" />
                        <path
                            d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                            fill="" />
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            
                        </h4>
                        <span class="text-sm font-medium">User</span>
                    </div>

                    <span class="flex items-center gap-1 text-sm font-medium text-green-600">
                        0.43%
                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                fill="" />
                        </svg>
                    </span>
                </div>
            </div>
            <!-- Card Item End -->
        </div>

        <div class="flex mt-5">
            <div class="w-full">
                <h1 class="font-bold text-[20px] text-red-600">Temperature</h1>
                <div id="chartTemperature" class="w-full h-[300px] mt-5"></div>
            </div>
            <div class="w-full">
                <h1 class="font-bold text-[20px] text-blue-600">Humidity</h1>
                <div id="chartHumidity" class="w-full h-[300px] mt-5"></div>
            </div>
        </div>
    </div>
    @push('script')
        <script type="text/javascript">
            $(document).ready(function() {
                $.ajax({
                    url: "/api/dashboard-chart-temperature",
                    method: 'GET',
                    success: function(res) {
                        var data = [];
                        var date = [];
                        // console.log(res.data)
                        res.data.forEach(element => {
                            // console.log(element)
                            var average = [];
                            element.record.forEach(record => {
                                average.push(record.average)
                                date.push(record.date + " " + record.hour + ":00")
                            })
                            data.push({
                                "name": element.name,
                                "data": average.reverse()
                            })
                        })

                        date.reverse()
                        var optionsTemperature = {
                            chart: {
                                type: 'area'
                            },
                            colors: ['#F44336', '#ffb12b', '#9C27B0'],
                            series: data,
                            xaxis: {
                                categories: date.reverse()
                            }
                        }

                        var chartTemperature = new ApexCharts(document.querySelector("#chartTemperature"),
                            optionsTemperature);

                        chartTemperature.render();
                    }
                })

                $.ajax({
                    url: "/api/dashboard-chart-humidity",
                    method: 'GET',
                    success: function(res) {
                        var data = [];
                        var date = [];
                        // console.log(res.data)
                        res.data.forEach(element => {
                            // console.log(element)
                            var average = [];
                            element.record.forEach(record => {
                                average.push(record.average)
                                date.push(record.date + " " + record.hour + ":00")
                            })
                            data.push({
                                "name": element.name,
                                "data": average.reverse()
                            })
                        })

                        date.reverse()
                        var optionsHumidity = {
                            chart: {
                                type: 'area'
                            },
                            series: data,
                            xaxis: {
                                categories: date.reverse()
                            }
                        }

                        var chartHumidity = new ApexCharts(document.querySelector("#chartHumidity"),
                            optionsHumidity);

                        chartHumidity.render();
                    }
                })
            })
        </script>
    @endpush

</x-app-layout>
