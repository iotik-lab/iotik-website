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
                <p class="text font-bold">
                    Incubator
                    <span class="text text-[15px] text-gray-600">/</span>
                    Create
                </p>
            </div>
            <a href="{{ route("incubator.index") }}" class="btn-red">
                Kembali
            </a>
        </div>
        <form
            action="{{ route("incubator.update", $incubator->id) }}"
            method="POST"
        >
            @csrf
            @method("PUT")
            <div class="grid gap-6 mb-5 md:grid-cols-2">
                <div>
                    <label
                        for="first_name"
                        class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Name
                    </label>
                    <input
                        type="text"
                        name="name"
                        value="{{ $incubator->name }}"
                        id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John"
                        required
                    />
                    @error("name")
                        <small class="text text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label
                        for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Status
                    </label>
                    <select
                        id="countries"
                        name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                        <option selected>{{ $incubator->status }}</option>
                        <option value="empty">Empty</option>
                        <option value="filled">Filled</option>
                    </select>
                    @error("status")
                        <small class="text text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label
                        for="company"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Egg Total
                    </label>
                    <input
                        type="number"
                        id="company"
                        name="egg_total"
                        value="{{ $incubator->egg_total }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="2"
                        required
                    />
                    @error("egg_total")
                        <small class="text text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label
                        for="phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Start Date
                    </label>

                    <input
                        type="date"
                        id="company"
                        name="start_date"
                        value="{{ $incubator->start_date }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="2"
                        required
                    />
                </div>
            </div>

            <button type="submit" class="btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
