<aside
    id="logo-sidebar"
    class="fixed top-0 shadow-md left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar"
>
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard" class="sidebar-link group">
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
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ route("incubator.index") }}"
                    class="sidebar-link group @active("incubator.*")"
                >
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
                    <span class="ms-3">Incubator</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ route("incubator.index") }}"
                    class="sidebar-link group"
                >
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
                        class="icon icon-tabler icons-tabler-outline icon-tabler-router"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M3 13m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"
                        />
                        <path d="M17 17l0 .01" />
                        <path d="M13 17l0 .01" />
                        <path d="M15 13l0 -2" />
                        <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />
                        <path d="M8.5 6.5a8 8 0 0 1 13 0" />
                    </svg>
                    <span class="ms-3">Devices</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ route("incubator.index") }}"
                    class="sidebar-link group"
                >
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
                    <span class="ms-3">Record</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ route("incubator.index") }}"
                    class="sidebar-link group"
                >
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
                        class="icon icon-tabler icons-tabler-outline icon-tabler-photo-search"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path
                            d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5"
                        />
                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M20.2 20.2l1.8 1.8" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l2 2" />
                    </svg>
                    <span class="ms-3">Images</span>
                </a>
            </li>
            <li>
                <a
                    href="{{ route("incubator.index") }}"
                    class="sidebar-link group"
                >
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
                    <span class="ms-3">User</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
