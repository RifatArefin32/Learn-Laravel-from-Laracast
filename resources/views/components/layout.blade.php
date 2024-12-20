<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $heading }} | Learn Laravel </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <!-- Logo and Links -->
                    <div class="flex items-center">
                        <div class="shrink-0 text-white">
                            <a href="/"> My Job Portal </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')"> Home </x-nav-link>
                                <x-nav-link href="/jobs" :active="request()->is('jobs')"> Jobs </x-nav-link>
                                <x-nav-link href="/about" :active="request()->is('about')"> About </x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')"> Contact </x-nav-link>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button and login logout -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="/jobs/create"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow-sm font-medium transition">
                            Create Job
                        </a>
                        <button type="button" class="text-white hover:text-gray-200 transition">
                            Login
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Header -->
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900"> {{ $page_title }} </h1>
            </div>
        </header>
    </div>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{ $slot }}
        </div>
    </main>
    </div>
</body>

</html>
