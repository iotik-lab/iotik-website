<x-app-layout>

    <div class="relative overflow-x-auto bg-white p-5 shadow-md sm:rounded-lg">
        <div class="flex justify-between mb-5 items-center">
            <div class="flex items-center gap-5">
                <div class="p-2 bg-primary rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-router">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 13m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M17 17l0 .01" />
                        <path d="M13 17l0 .01" />
                        <path d="M15 13l0 -2" />
                        <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />
                        <path d="M8.5 6.5a8 8 0 0 1 13 0" />
                    </svg>
                </div>
                <p class="text font-bold">Devices</p>
            </div>
        </div>

        <div class="flex">
                <div id="chartTemperature" class="w-full h-[300px] mt-5"></div>
                <div id="chartHumidity" class="w-full h-[300px] mt-5"></div>
        </div>
        <script>
            var optionsTemperature = {
                chart: {
                    type: 'area'
                },
                colors:['#F44336', '#E91E63', '#9C27B0'],
                series: [{
                    name: 'temperature',
                    data: [37, 38, 39, 38, 38, 39, 38, 39, 38]
                }],
                xaxis: {
                    categories: ['07:00', '07:10', '07:20', '07:30', '07:40', '07:50', '08:00', '08:10', '08:20']
                }
            }

            var chartTemperature = new ApexCharts(document.querySelector("#chartTemperature"), optionsTemperature);

            chartTemperature.render();

            var optionsHumidity = {
                chart: {
                    type: 'area'
                },
                series: [{
                    name: 'sales',
                    data: [60, 60, 60, 60, 60, 60, 70, 60, 70]
                }],
                xaxis: {
                    categories: ['07:00', '07:10', '07:20', '07:30', '07:40', '07:50', '08:00', '08:10', '08:20']
                }
            }

            var chartHumidity = new ApexCharts(document.querySelector("#chartHumidity"), optionsHumidity);

            chartHumidity.render();
        </script>
</x-app-layout>
