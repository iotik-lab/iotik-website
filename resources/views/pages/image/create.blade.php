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

    <div class="relative bg-white p-5 shadow-md sm:rounded-lg">
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
                <p class="text font-bold">Images</p>
            </div>
        </div>
        <div class="flex gap-2">
            <?php
            $eggs = [3, 6, 9, 12, 2, 5, 8, 11, 1, 4, 7, 10];
            ?>

            <div class="basis-1/2">
                <h1 class="text font-[700] mb-3">Control Lamp</h1>
                <div
                    class="max-w-lg grid h-[350px] grid-cols-4 gap-4 rounded-lg shadow-lg px-10 py-8 border bg-white"
                >
                    <?php foreach ($eggs as $egg) : ?>

                    <div
                        class="egg {{ in_array($egg, $incubator->leds) ? "active" : "" }}"
                        data-port="<?= $egg ?>"
                    >
                        <?= $egg ?>
                    </div>

                    <?php endforeach; ?>
                </div>

                <div class="flex mt-5 justify-start gap-x-4">
                    <button
                        id="led-start"
                        class="py-1 px-3 bg-yellow-500 text-white rounded-md text-sm"
                    >
                        <i class="fas fa-lightbulb mr-1"></i>
                        Nyalakan
                    </button>

                    <button
                        id="led-stop"
                        class="py-1 px-3 bg-red-600 text-white rounded-md text-sm"
                    >
                        <i class="far fa-lightbulb mr-1"></i>
                        Matikan
                    </button>
                </div>
            </div>
            <div class="basis-1/2">
                <h1 class="text font-[700] mb-3">Preview</h1>
                <div
                    id="preview-frame"
                    class="border shadow-lg rounded-lg aspect-[4/3] cursor-pointer relative flex flex-col items-center justify-center bg-center bg-cover bg-no-repeat"
                >
                    <div class="absolute top-4 right-4 text-sm text-gray-400">
                        IOTIK Cam
                    </div>
                    <span id="preview-text" class="text-gray-500">
                        Klik untuk melihat preview
                    </span>
                </div>

                <div class="flex mt-4 justify-center gap-x-4">
                    <button
                        id="preview-stop"
                        class="py-1 px-3 bg-red-700 text-white rounded-md text-sm"
                    >
                        <i class="fas fa-stop mr-1"></i>
                        Stop
                    </button>

                    <button
                        id="candling-btn"
                        class="py-1 px-3 bg-blue-700 text-white rounded-md text-sm"
                    >
                        <i class="fas fa-square-caret-up mr-1"></i>
                        Proses
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push("script")
        <script>
            const eggs = document.querySelectorAll('.egg')
            const prevFrame = document.getElementById('preview-frame')
            const prevText = document.getElementById('preview-text')
            const prevStop = document.getElementById('preview-stop')
            const ledStart = document.getElementById('led-start')
            const ledStop = document.getElementById('led-stop')
            const candlingBtn = document.getElementById('candling-btn')

            const ws = new WebSocket('{{ config("app.ws_url") }}')

            function sendCommand(command) {
                $.ajax({
                    url: '/images/{{ $camera->id }}/preview',
                    method: 'POST',
                    data: { mode: command },
                    success: function (res) {
                        console.log(res)
                    },
                })
            }

            function updateLed(leds) {
                console.log(leds)

                $.ajax({
                    url: '/images/{{ $led?->id }}/led',
                    method: 'POST',
                    data: { led: JSON.stringify(leds) },
                    success: function (res) {
                        console.log(res)
                    },
                })
            }

            ws.onopen = () => {
                ws.send(JSON.stringify({ device_id: 'io71k2' }))
            }

            eggs.forEach((egg) => {
                egg.addEventListener('click', () => {
                    let actives = []

                    egg.classList.toggle('active')
                    document
                        .querySelectorAll('.egg.active')
                        .forEach((egg) => actives.push(egg.dataset.port))

                    $.ajax({
                        url: '/leds/{{ $incubator?->id }}/update',
                        method: 'POST',
                        data: { leds: JSON.stringify(actives) },
                        success: function (res) {
                            console.log(res)
                        },
                    })
                })
            })

            ws.onmessage = (event) => {
                const filereader = new FileReader()

                filereader.onload = () => {
                    prevFrame.style.backgroundImage = `url(${filereader.result})`
                    prevText.innerHTML = ''
                }

                filereader.readAsDataURL(event.data)
            }

            prevFrame.addEventListener('click', function () {
                prevText.innerHTML = 'Menghubungkan ke kamera...'
                sendCommand('start')
            })

            prevStop.addEventListener('click', function () {
                sendCommand('stop')
                prevText.innerHTML = 'Klik untuk melihat preview'
                prevFrame.style.backgroundImage = 'none'
            })

            ledStart.addEventListener('click', function () {
                let actives = []
                const eggs = document.querySelectorAll('.egg.active')

                eggs.forEach((egg) => actives.push(egg.dataset.port))
                updateLed(actives)
            })

            ledStop.addEventListener('click', function () {
                updateLed([])
            })

            candlingBtn.addEventListener('click', function (e) {
                e.preventDefault()

                $.ajax({
                    url: '/images/{{ $incubator->id }}/candling',
                    method: 'POST',
                    success: function (res) {
                        document.location.href =
                            '/images/{{ $incubator->id }}/loading'
                    },
                })
            })
        </script>
    @endpush
</x-app-layout>
