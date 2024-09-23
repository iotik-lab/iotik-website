<x-app-layout>
    <div class="relative overflow-x-auto bg-white p-5 shadow-md sm:rounded-lg">
        <a href="" class="btn-primary mb-3">Tambah</a>
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
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">Silver</td>
                    <td class="px-6 py-4">Laptop</td>
                    <td class="px-6 py-4">2 Telur</td>
                    <td class="px-6 py-4">
                        <a
                            href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                        >
                            Edit
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @push("script")
        <script>
            let table = new DataTable('#datatable')
        </script>
    @endpush
</x-app-layout>
