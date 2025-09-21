<!--
  TailDesk - A premium and clean dashboard UI for your support service

  Created by John Champ

  Founder of Pixelcave      -> https://pixelcave.com
  Building Tailkit          -> https://tailkit.com
  Let's connect on X        -> https://x.com/pixelcave_john
                on Bluesky  -> https://bsky.app/profile/pixelcave-john.bsky.social
-->

<div x-data="{ userDropdownOpen: false, notificationsDropdownOpen: false, mobileNavOpen: false }">
    <!-- Page Container -->
    <div id="page-container" class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-white lg:pt-20">
        <!-- Page Header -->
        <header id="page-header"
            class="z-50 flex flex-none items-center border-b border-neutral-200/75 bg-white/90 backdrop-blur-xs lg:fixed lg:start-0 lg:end-0 lg:top-0 lg:h-20">
            <div class="container mx-auto px-4 lg:px-8 xl:max-w-7xl">
                <div class="flex justify-between py-5 lg:py-0">
                    <!-- Left Section -->
                    <div class="flex items-center gap-2 lg:gap-6">
                        <!-- Logo -->
                        <a href="javascript:void(0)"
                            class="group inline-flex items-center gap-1.5 text-lg font-bold tracking-wide text-neutral-900 hover:text-neutral-600">
                            <svg class="hi-mini hi-lifebuoy inline-block size-5 text-neutral-950 transition group-hover:scale-110 group-active:scale-100"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.171 4.146l1.947 2.466a3.514 3.514 0 011.764 0l1.947-2.466a6.52 6.52 0 00-5.658 0zm8.683 3.025l-2.466 1.947c.15.578.15 1.186 0 1.764l2.466 1.947a6.52 6.52 0 000-5.658zm-3.025 8.683l-1.947-2.466c-.578.15-1.186.15-1.764 0l-1.947 2.466a6.52 6.52 0 005.658 0zM4.146 12.83l2.466-1.947a3.514 3.514 0 010-1.764L4.146 7.171a6.52 6.52 0 000 5.658zM5.63 3.297a8.01 8.01 0 018.738 0 8.031 8.031 0 012.334 2.334 8.01 8.01 0 010 8.738 8.033 8.033 0 01-2.334 2.334 8.01 8.01 0 01-8.738 0 8.032 8.032 0 01-2.334-2.334 8.01 8.01 0 010-8.738A8.03 8.03 0 015.63 3.297zm5.198 4.882a2.008 2.008 0 00-2.243.407 1.994 1.994 0 00-.407 2.243 1.993 1.993 0 00.992.992 2.008 2.008 0 002.243-.407c.176-.175.31-.374.407-.585a2.008 2.008 0 00-.407-2.243 1.993 1.993 0 00-.585-.407z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Tail<span class="font-normal">Desk</span></span>
                        </a>
                        <!-- END Logo -->

                        <!-- Desktop Navigation -->
                        <nav class="hidden items-center gap-2 lg:flex">
                            <a href="javascript:void(0)"
                                class="group flex items-center gap-2 rounded-lg bg-neutral-100 px-3 py-1.5 text-sm font-medium text-neutral-950">
                                <span>Dashboard</span>
                            </a>
                            <a href="javascript:void(0)"
                                class="group flex items-center gap-2 rounded-lg px-3 py-1.5 text-sm font-medium text-neutral-800 hover:bg-neutral-100 hover:text-neutral-950 active:bg-neutral-50">
                                <span>Tickets</span>
                            </a>
                            <a href="javascript:void(0)"
                                class="group flex items-center gap-2 rounded-lg px-3 py-1.5 text-sm font-medium text-neutral-800 hover:bg-neutral-100 hover:text-neutral-950 active:bg-neutral-50">
                                <span>Reports</span>
                            </a>
                            <a href="javascript:void(0)"
                                class="group flex items-center gap-2 rounded-lg px-3 py-1.5 text-sm font-medium text-neutral-800 hover:bg-neutral-100 hover:text-neutral-950 active:bg-neutral-50">
                                <span>Customers</span>
                            </a>
                        </nav>
                        <!-- END Desktop Navigation -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="flex items-center gap-2">
                        <!-- Notifications -->
                        <div class="relative inline-block">
                            <!-- Dropdown Toggle Button -->
                            <button x-on:click="notificationsDropdownOpen = !notificationsDropdownOpen"
                                x-bind:aria-expanded="notificationsDropdownOpen" type="button"
                                id="dropdown-notifications"
                                class="inline-flex items-center justify-center gap-1 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200"
                                aria-haspopup="true">
                                <div class="absolute -end-2 -top-2">
                                    <span
                                        class="rounded-full bg-neutral-800 px-1.5 py-0.5 text-xs font-semibold text-white">3</span>
                                </div>
                                <svg class="hi-outline hi-bell-alert inline-block size-5"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                                </svg>
                            </button>
                            <!-- END Dropdown Toggle Button -->

                            <!-- Dropdown -->
                            <div x-cloak x-show="notificationsDropdownOpen"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                x-on:click.outside="notificationsDropdownOpen = false" role="menu"
                                aria-labelledby="dropdown-notifications"
                                class="absolute -end-20 z-10 mt-2 w-64 rounded-lg shadow-xl lg:w-80 ltr:origin-top-right rtl:origin-top-left">
                                <div class="rounded-lg bg-white py-2.5 ring-1 ring-black/5">
                                    <a role="menuitem" href="javascript:void(0)"
                                        class="group block gap-1.5 px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-100 hover:text-neutral-950">
                                        <div class="text-xs text-neutral-600">Just now</div>
                                        <h5 class="mb-0.5 font-semibold">
                                            <span class="text-indigo-500">&bull;</span>
                                            New Ticket Assigned: #4567
                                        </h5>
                                        <p class="text-xs text-neutral-500">
                                            You have been assigned a new ticket regarding a
                                            software installation issue. Please review and respond
                                            promptly.
                                        </p>
                                    </a>
                                    <a role="menuitem" href="javascript:void(0)"
                                        class="group block gap-1.5 px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-100 hover:text-neutral-950">
                                        <div class="text-xs text-neutral-600">2 hours ago</div>
                                        <h5 class="mb-0.5 font-semibold">
                                            <span class="text-indigo-500">&bull;</span>
                                            Feedback Requested for Ticket #4432
                                        </h5>
                                        <p class="text-xs text-neutral-500">
                                            Your recently resolved ticket regarding account
                                            recovery has been flagged for quality review. Please
                                            provide your feedback.
                                        </p>
                                    </a>

                                    <a role="menuitem" href="javascript:void(0)"
                                        class="group block gap-1.5 px-4 py-2 text-sm text-neutral-700 hover:bg-neutral-100 hover:text-neutral-950">
                                        <div class="text-xs text-neutral-600">5 hours ago</div>
                                        <h5 class="mb-0.5 font-semibold">
                                            <span class="text-indigo-500">&bull;</span>
                                            Monthly Performance Metrics Available
                                        </h5>
                                        <p class="text-xs text-neutral-500">
                                            Your support performance metrics for the past month
                                            are now available. Review them for insights on
                                            response times and customer satisfaction.
                                        </p>
                                    </a>
                                    <hr class="my-2.5 border-neutral-100" />
                                    <div class="px-4 py-1.5">
                                        <a href="javascript:void(0)"
                                            class="inline-flex w-full items-center justify-center gap-1 rounded-lg border border-neutral-200 bg-white px-2 py-1.5 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                            <svg class="hi-mini hi-bell-alert inline-block size-4 opacity-50"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M4.214 3.227a.75.75 0 00-1.156-.956 8.97 8.97 0 00-1.856 3.826.75.75 0 001.466.316 7.47 7.47 0 011.546-3.186zM16.942 2.271a.75.75 0 00-1.157.956 7.47 7.47 0 011.547 3.186.75.75 0 001.466-.316 8.971 8.971 0 00-1.856-3.826z" />
                                                <path fill-rule="evenodd"
                                                    d="M10 2a6 6 0 00-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 00.515 1.076 32.94 32.94 0 003.256.508 3.5 3.5 0 006.972 0 32.933 32.933 0 003.256-.508.75.75 0 00.515-1.076A11.448 11.448 0 0116 8a6 6 0 00-6-6zm0 14.5a2 2 0 01-1.95-1.557 33.54 33.54 0 003.9 0A2 2 0 0110 16.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>All notifications</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Dropdown -->
                        </div>
                        <!-- END Notifications -->

                        <!-- User Dropdown -->
                        <div class="relative inline-block">
                            <!-- Dropdown Toggle Button -->
                            <button x-on:click="userDropdownOpen = !userDropdownOpen"
                                x-bind:aria-expanded="userDropdownOpen" type="button" id="dropdown-user"
                                class="inline-flex items-center justify-center gap-1 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200"
                                aria-haspopup="true">
                                <svg class="hi-mini hi-user-circle inline-block size-5 sm:hidden"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="hidden sm:inline">John</span>
                                <svg class="hi-mini hi-chevron-down hidden size-5 opacity-40 sm:inline-block"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- END Dropdown Toggle Button -->

                            <!-- Dropdown -->
                            <div x-cloak x-show="userDropdownOpen" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                x-on:click.outside="userDropdownOpen = false" role="menu"
                                aria-labelledby="dropdown-user"
                                class="absolute end-0 z-10 mt-2 w-40 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                                <div class="rounded-lg bg-white py-2.5 ring-1 ring-black/5">
                                    <a role="menuitem" href="javascript:void(0)"
                                        class="group flex items-center justify-between gap-1.5 px-4 py-1.5 text-sm font-medium text-neutral-700 hover:bg-neutral-100 hover:text-neutral-950">
                                        <span class="grow">Account</span>
                                        <span
                                            class="rounded-full border border-neutral-200 px-2 py-1 text-xs font-semibold">3</span>
                                    </a>
                                    <a role="menuitem" href="javascript:void(0)"
                                        class="group flex items-center justify-between gap-1.5 px-4 py-1.5 text-sm font-medium text-neutral-700 hover:bg-neutral-100 hover:text-neutral-950">
                                        <span class="grow">Settings</span>
                                        <span
                                            class="rounded-full border border-neutral-200 px-2 py-1 text-xs font-semibold">2</span>
                                    </a>
                                    <hr class="my-2.5 border-neutral-100" />
                                    <form onsubmit="return false;">
                                        <button type="submit" role="menuitem"
                                            class="group flex w-full items-center justify-between gap-1.5 px-4 py-1.5 text-start text-sm font-medium text-neutral-700 hover:bg-neutral-100 hover:text-neutral-950">
                                            <span class="grow">Sign out</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- END Dropdown -->
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Toggle Mobile Navigation -->
                        <div class="lg:hidden">
                            <button x-on:click="mobileNavOpen = !mobileNavOpen" type="button"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    class="hi-solid hi-menu inline-block size-5">
                                    <path fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- END Toggle Mobile Navigation -->
                    </div>
                    <!-- END Right Section -->
                </div>

                <!-- Mobile Navigation -->
                <div x-cloak x-show="mobileNavOpen" class="lg:hidden">
                    <nav class="flex flex-col gap-2 border-t border-neutral-200 py-4">
                        <a href="javascript:void(0)"
                            class="group flex items-center gap-2 rounded-lg bg-neutral-100 px-3 py-1.5 text-sm font-medium text-neutral-950">
                            <span>Dashboard</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="group flex items-center gap-2 rounded-lg px-3 py-1.5 text-sm font-medium text-neutral-800 hover:bg-neutral-100 hover:text-neutral-950 active:bg-neutral-50">
                            <span>Tickets</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="group flex items-center gap-2 rounded-lg px-3 py-1.5 text-sm font-medium text-neutral-800 hover:bg-neutral-100 hover:text-neutral-950 active:bg-neutral-50">
                            <span>Reports</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="group flex items-center gap-2 rounded-lg px-3 py-1.5 text-sm font-medium text-neutral-800 hover:bg-neutral-100 hover:text-neutral-950 active:bg-neutral-50">
                            <span>Customers</span>
                        </a>
                    </nav>
                </div>
                <!-- END Mobile Navigation -->
            </div>
        </header>
        <!-- END Page Header -->

        <!-- Page Content -->
        <main id="page-content" class="flex max-w-full flex-auto flex-col">
            <!-- Page Heading -->
            <div class="container mx-auto px-4 pt-6 lg:px-8 lg:pt-8 xl:max-w-7xl">
                <div
                    class="flex flex-col gap-2 text-center sm:flex-row sm:items-center sm:justify-between sm:text-start">
                    <div class="grow">
                        <h1 class="mb-1 text-xl font-bold">Dashboard</h1>
                        <h2 class="text-sm font-medium text-neutral-500">
                            Welcome, you have <strong>5 open tickets</strong> and
                            <strong>3 notifications</strong>.
                        </h2>
                    </div>
                    <div class="flex flex-none items-center justify-center gap-2 rounded-sm sm:justify-end">
                        <div class="relative">
                            <div
                                class="pointer-events-none absolute inset-y-0 start-0 my-px ms-px flex w-10 items-center justify-center rounded-l-lg text-neutral-500">
                                <svg class="hi-mini hi-magnifying-glass inline-block size-5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="search" name="search" placeholder="Search everything.."
                                class="block w-full rounded-lg border border-neutral-200 py-2 ps-10 pe-3 leading-6 placeholder-neutral-500 focus:border-neutral-500 focus:ring-3 focus:ring-neutral-500/25" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Heading -->

            <!-- Page Section -->
            <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 lg:gap-8">
                    <!-- Quick Statistics -->
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded-lg border border-neutral-200 bg-white hover:border-neutral-300 active:border-neutral-200">
                        <div class="flex grow items-center justify-between p-5">
                            <dl>
                                <dt class="text-2xl font-bold">5</dt>
                                <dd class="text-sm font-medium text-neutral-500">
                                    Open Tickets
                                </dd>
                            </dl>
                            <div class="flex items-center text-sm font-medium text-emerald-500">
                                <svg class="hi-mini hi-arrow-down inline-block size-5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>5%</span>
                            </div>
                        </div>
                        <div class="border-t border-neutral-100 px-5 py-3 text-xs font-medium text-orange-500">
                            Assigned to you
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded-lg border border-neutral-200 bg-white hover:border-neutral-300 active:border-neutral-200">
                        <div class="flex grow items-center justify-between p-5">
                            <dl>
                                <dt class="text-2xl font-bold">28</dt>
                                <dd class="text-sm font-medium text-neutral-500">
                                    Open Tickets
                                </dd>
                            </dl>
                            <div class="flex items-center text-sm font-medium text-emerald-500">
                                <svg class="hi-mini hi-arrow-down inline-block size-5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>12%</span>
                            </div>
                        </div>
                        <div class="border-t border-neutral-100 px-5 py-3 text-xs font-medium text-neutral-500">
                            In total
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded-lg border border-neutral-200 bg-white hover:border-neutral-300 active:border-neutral-200">
                        <div class="flex grow items-center justify-between p-5">
                            <dl>
                                <dt class="text-2xl font-bold">792</dt>
                                <dd class="text-sm font-medium text-neutral-500">
                                    Closed Tickets
                                </dd>
                            </dl>
                            <div class="flex items-center text-sm font-medium text-rose-500">
                                <svg class="hi-mini hi-arrow-down inline-block size-5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>7,5%</span>
                            </div>
                        </div>
                        <div class="border-t border-neutral-100 px-5 py-3 text-xs font-medium text-neutral-500">
                            Last 30 days
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded-lg border border-neutral-200 bg-white hover:border-neutral-300 active:border-neutral-200">
                        <div class="flex grow items-center justify-between p-5">
                            <dl>
                                <dt class="text-2xl font-bold">2,580</dt>
                                <dd class="text-sm font-medium text-neutral-500">
                                    All Customers
                                </dd>
                            </dl>
                            <div class="flex items-center text-sm font-medium text-emerald-500">
                                <svg class="hi-mini hi-arrow-small-up inline-block size-5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 15a.75.75 0 01-.75-.75V7.612L7.29 9.77a.75.75 0 01-1.08-1.04l3.25-3.5a.75.75 0 011.08 0l3.25 3.5a.75.75 0 11-1.08 1.04l-1.96-2.158v6.638A.75.75 0 0110 15z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>25%</span>
                            </div>
                        </div>
                        <div class="border-t border-neutral-100 px-5 py-3 text-xs font-medium text-neutral-500">
                            Last 30 days
                        </div>
                    </a>
                    <!-- END Quick Statistics -->

                    <!-- Tickets -->
                    <div
                        class="flex flex-col rounded-lg border border-neutral-200 bg-white sm:col-span-2 lg:col-span-4">
                        <div
                            class="flex flex-col items-center justify-between gap-4 border-b border-neutral-100 p-5 text-center sm:flex-row sm:text-start">
                            <div>
                                <h2 class="mb-0.5 font-semibold">Recent tickets</h2>
                                <h3 class="text-sm font-medium text-neutral-600">
                                    It seems that we are receiving less tickets the last 30
                                    days
                                </h3>
                            </div>
                            <div>
                                <a href="javascript:void(0)"
                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                    View all tickets
                                </a>
                            </div>
                        </div>
                        <div class="p-5">
                            <!-- Responsive Table Container -->
                            <div class="min-w-full overflow-x-auto rounded-sm">
                                <!-- Alternate Responsive Table -->
                                <table class="min-w-full align-middle text-sm">
                                    <!-- Table Header -->
                                    <thead>
                                        <tr class="border-b-2 border-neutral-100">
                                            <th
                                                class="min-w-[140px] px-3 py-2 text-start text-sm font-semibold tracking-wider text-neutral-700 uppercase">
                                                ID
                                            </th>
                                            <th
                                                class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold tracking-wider text-neutral-700 uppercase">
                                                Date
                                            </th>
                                            <th
                                                class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold tracking-wider text-neutral-700 uppercase">
                                                User
                                            </th>
                                            <th
                                                class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold tracking-wider text-neutral-700 uppercase">
                                                Title
                                            </th>
                                            <th
                                                class="px-3 py-2 text-start text-sm font-semibold tracking-wider text-neutral-700 uppercase">
                                                Status
                                            </th>
                                            <th
                                                class="min-w-[100px] p-3 py-2 text-end text-sm font-semibold tracking-wider text-neutral-700 uppercase">
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- END Table Header -->

                                    <!-- Table Body -->
                                    <tbody>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4585
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-11-15 09:30
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Alex
                                                    Johnson</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                Unable to Connect to Wi-Fi on Laptop
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-purple-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-purple-800">
                                                    New
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4584
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-11-10 14:15
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Jordan
                                                    Smith</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                Email Campaign Software Crashing Frequently
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-blue-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-blue-800">
                                                    Awaiting Response
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4583
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-11-05 17:45
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Samantha
                                                    Davis</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                Issues Syncing Calendar Across Devices
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-blue-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-blue-800">
                                                    Awaiting Response
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4582
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-10-30 08:00
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Mindy
                                                    O'Connell</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                Graphics Tablet Not Responding in Design Software
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-purple-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-purple-800">
                                                    New
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4581
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-10-25 20:20
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Dave
                                                    Rodriguez</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                Server Timeout Errors During Development
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-orange-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-orange-800">
                                                    Under Investigation
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4580
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-11-10 14:15
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Helen
                                                    Thompson</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                Payroll System Access Denied Error
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-orange-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-orange-800">
                                                    Under Investigation
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4579
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-10-15 09:15
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Peter
                                                    Williams</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                CRM Tool Lagging and Freezing
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-emerald-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-emerald-800">
                                                    Closed
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4578
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-10-10 16:30
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Fiona
                                                    Martinez</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                VPN Disconnections When Working Remotely
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-emerald-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-emerald-800">
                                                    Closed
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4577
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-10-05 14:00
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Danny
                                                    Kim</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                Database Query Execution Taking Too Long
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-emerald-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-emerald-800">
                                                    Closed
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-neutral-100 hover:bg-neutral-50">
                                            <td class="p-3 text-start font-semibold text-neutral-600">
                                                RN#4576
                                            </td>
                                            <td class="p-3 text-start text-neutral-600">
                                                2023-10-01 11:45
                                            </td>
                                            <td class="p-3 font-medium text-neutral-600">
                                                <a href="javascript:void(0)"
                                                    class="underline decoration-neutral-200 decoration-2 underline-offset-4 hover:text-neutral-950 hover:decoration-neutral-300">Mike
                                                    Brown</a>
                                            </td>
                                            <td class="p-3 text-start">
                                                Video Conferencing Tool Audio Issues
                                            </td>
                                            <td class="p-3 font-medium">
                                                <div
                                                    class="inline-block rounded-full bg-emerald-100 px-2 py-1 text-xs leading-4 font-semibold whitespace-nowrap text-emerald-800">
                                                    Closed
                                                </div>
                                            </td>
                                            <td class="p-3 text-end font-medium">
                                                <a href="javascript:void(0)"
                                                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-neutral-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-neutral-800 hover:border-neutral-300 hover:text-neutral-950 active:border-neutral-200">
                                                    <span>View</span>
                                                    <svg class="hi-mini hi-arrow-right inline-block size-5 text-neutral-400 group-hover:text-blue-600 group-active:translate-x-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- END Table Body -->
                                </table>
                                <!-- END Alternate Responsive Table -->
                            </div>
                            <!-- END Responsive Table Container -->
                        </div>
                    </div>
                    <!-- END Tickets -->
                </div>
            </div>
            <!-- END Page Section -->
        </main>
        <!-- END Page Content -->

        <!-- Page Footer -->
        <footer id="page-footer" class="flex flex-none items-center py-5">
            <div
                class="container mx-auto flex flex-col px-4 text-center text-sm md:flex-row md:justify-between md:text-start lg:px-8 xl:max-w-7xl">
                <div class="pt-4 pb-1 md:pb-4">
                    ©
                    <span class="font-medium">TailDesk</span>
                </div>
                <div class="inline-flex items-center justify-center pt-1 pb-4 md:pt-4">
                    <span>Crafted with</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                        class="hi-solid hi-heart mx-1 inline-block size-4 text-red-600">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>
                        by
                        <a href="https://pixelcave.com" class="font-medium text-blue-600 hover:text-blue-400"
                            target="_blank">pixelcave</a></span>
                </div>
            </div>
        </footer>
        <!-- END Page Footer -->
    </div>
    <!-- END Page Container -->
</div>