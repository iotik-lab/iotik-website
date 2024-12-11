<x-app-layout>
    @if (session()->has('success'))
        <div id="sticky-banner" tabindex="-1"
            class="mb-3 z-50 flex justify-between w-full p-4 border-gray-200 bg-green-50 dark:bg-gray-700 dark:border-gray-600">
            <div class="flex items-center mx-auto">
                <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
                    <span
                        class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center flex-shrink-0">
                        <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                            <path
                                d="M15 1.943v12.114a1 1 0 0 1-1.581.814L8 11V5l5.419-3.871A1 1 0 0 1 15 1.943ZM7 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4ZM4 17v-5h1v5H4ZM16 5.183v5.634a2.984 2.984 0 0 0 0-5.634Z" />
                        </svg>
                        <span class="sr-only">Light bulb</span>
                    </span>
                    <span>
                        {{ session()->get('success') }}
                    </span>
                </p>
            </div>

            <div class="flex items-center">
                <button data-dismiss-target="#sticky-banner" type="button"
                    class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                    class="icon icon-tabler icons-tabler-outline icon-tabler-report-analytics"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"
                    />
                    <path
                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"
                    />
                    <path d="M9 17v-5" />
                    <path d="M12 17v-1" />
                    <path d="M15 17v-3" />
                </svg>
                </div>
                <p class="text font-bold">Incubator</p>
            </div>
            <form action="{{ route("report-export") }}" method="GET">
            <div>
                <input type="hidden" value="{{ $incubators[0]->id }}" id="first_incubator">
                <select name="incubator_id" class="p-2 rounded-xl border-slate-200 w-[200px]" id="incubator">
                    @foreach ($incubators as $incubator)
                        <option data-port={{ $incubator->id }} value="{{ $incubator->id }}" class="p-2">
                            {{ $incubator->name }}</option>
                    @endforeach
                </select>
                <button class="btn-primary" type="submit">
                    Export
                </button>
            </div>
        </form>
        </div>
        <div class="flex">
            <div id="chartTemperature" class="w-full h-[300px] mt-5"></div>
            <div id="chartHumidity" class="w-full h-[200px] mt-5"></div>
        </div>
    </div>

    <script>
        function tampilChart(incubator_id) {
            $.ajax({
                url: '/api/record/' + incubator_id,
                type: "GET",
                async: true,
                cache: false,
                success: function(response) {
                    var temp = [];
                    var humi = [];
                    var dateTemp = [];
                    var dateHumi = [];
                    response.data.temperature.forEach(element => {
                        temp.push(element.average);
                        dateTemp.push(element.date + " " + element.hour + ":00");
                    });
                    response.data.humidity.forEach(element => {
                        humi.push(element.average);
                        dateHumi.push(element.date + " " + element.hour + ":00");
                    })

                    var optionsTemperature = {
                        chart: {
                            type: 'area'
                        },

                        colors: ['#F44336', '#E91E63', '#9C27B0'],
                        series: [{
                            name: 'temperature',
                            data: temp
                        }],
                        xaxis: {
                            categories: dateTemp
                        }
                    }

                    var optionsHumidity = {
                        chart: {
                            type: 'area'
                        },
                        series: [{
                            name: 'sales',
                            data: humi
                        }],
                        xaxis: {
                            categories: dateHumi
                        }
                    }

                    var chartTemperature = new ApexCharts(document.querySelector("#chartTemperature"),
                        optionsTemperature);

                    chartTemperature.render();

                    var chartHumidity = new ApexCharts(document.querySelector("#chartHumidity"),
                        optionsHumidity);

                    chartHumidity.render();
                    chartHumidity.updateSeries([{
                        name: "sales",
                        data: humi
                    }])
                    chartTemperature.updateSeries([{
                        name: "sales",
                        data: temp
                    }])
                }
            })




        }
    </script>

    @push('script')
        <script type="text/javascript">
            $(document).ready(function() {
                var firstIncubator = document.getElementById('first_incubator').value;
                tampilChart(firstIncubator);
                // alert(firstIncubator)
                $("#incubator").change(function(e) {
                    var idIncubator = e.target.options[e.target.selectedIndex].dataset.port ?? firstIncubator;
                    // alert(idIncubator)
                    tampilChart(idIncubator);
                })
            })
        </script>
    @endpush

</x-app-layout>
