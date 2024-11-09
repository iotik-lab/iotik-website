{{--
    <nav
    id="navbar"
    class="sticky flex bg-gray-50 top-0 left-0 w-full flex justify-between items-center py-6 px-16 z-50"
    >
    <div class="flex items-center">
    <div class="h-8 w-8 bg-orange-500 rounded"></div>
    <span class="ml-2 text-xl font-bold text-black">IoTIK</span>
    </div>
    <ul class="flex space-x-8">
    <li><a href="#" class="text-gray-700">Introduction</a></li>
    <li><a href="#" class="text-gray-700">Tools</a></li>
    <li><a href="#" class="text-gray-700">Features</a></li>
    <li><a href="#" class="text-gray-700">Mobile</a></li>
    </ul>
    <a
    href="#"
    class="text-orange-500 border border-orange-500 px-12 py-2 rounded-lg hover:bg-orange-500 hover:black transition"
    >
    Login
    </a>
    </nav>
--}}

<nav
    id="navbar"
    class="bg-gray-50 sticky w-full z-20 top-0 start-0 border-gray-200 dark:border-gray-600"
>
    <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
    >
        <a
            href="https://flowbite.com/"
            class="flex items-center space-x-3 rtl:space-x-reverse"
        >
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:black"
            >
                IoTIK
            </span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button
                type="button"
                class="black text-[#ffffff] bg-orange-300 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:ring-orange-300 dark:hover:ring-orange-300 dark:focus:ring-orange-300"
            >
                Login
            </button>
            <button
                data-collapse-toggle="navbar-sticky"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky"
                aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                </svg>
            </button>
        </div>
        <div
            class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="navbar-sticky"
        >
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:border-gray-700"
            >
                <li>
                    <a
                        href="#"
                        class="block py-2 px-3 black bg-orange-800 rounded md:bg-transparent md:text-orange-700 md:p-0 md:dark:text-orange-800"
                        aria-current="page"
                    >
                        Home
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-700 md:p-0 md:dark:hover:text-orange-500 dark:black dark:hover:bg-gray-700 dark:hover:black md:dark:hover:bg-transparent dark:border-gray-700"
                    >
                        About
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-orange-500 dark:black dark:hover:bg-gray-700 dark:hover:black md:dark:hover:bg-transparent dark:border-gray-700"
                    >
                        Services
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-orange-500 dark:black dark:hover:bg-gray-700 dark:hover:black md:dark:hover:bg-transparent dark:border-gray-700"
                    >
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
