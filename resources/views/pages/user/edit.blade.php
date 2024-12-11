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
                    class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                </svg>
                </div>
                <p class="text font-bold">
                    User
                    <span class="text text-[15px] text-gray-600">/</span>
                    Edit
                </p>
            </div>
            <a href="{{ route("user.index") }}" class="btn-red">
                Kembali
            </a>
        </div>
        <form action="{{ route("user.update", $user->id) }}"  method="POST">
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
                        value="{{ $user->name }}"
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
                        for="first_name"
                        class="block mb-1 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Email
                    </label>
                    <input
                        type="text"
                        name="email"
                        value="{{ $user->email }}"
                        id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John"
                        required
                    />
                    @error("email")
                        <small class="text text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                
                <div>
                    <label
                        for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Role
                    </label>
                    <select
                        id="countries"
                        name="role"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                        <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                        <option value="admin">Admin</option>
                        <option value="employee">Karyawan</option>
                    </select>
                    @error("role")
                        <small class="text text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                
            </div>

            <button type="submit" class="btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
