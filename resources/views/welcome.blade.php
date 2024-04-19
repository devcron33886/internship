<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondazione Marcegaglia Onlus</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative bg-gray-50 overflow-hidden">
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
            <div class="relative h-full max-w-7xl mx-auto">
                <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-red-600" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
                <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                    width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-red-600" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
                </svg>
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="{{ route('welcome') }}">
                                <span class="sr-only">Volunteer</span>
                                <img class="h-12 w-auto sm:h-12"
                                    src="https://fmorwanda.org/wp-content/uploads/2022/10/logo.png" alt="">
                            </a>

                        </div>
                    </div>

                </nav>

                <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Join our cause</span>
                        </h1>
                        <p
                            class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">

                            Join our cause in order to build a world where social inequalities are increasingly
                            reduced and the role of
                            women is valued.

                        </p>
                        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                            <div class="rounded-md shadow">
                                <a href="#apply"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 bg-white pb-16 sm:mt-24 sm:pb-24">
                <div class="relative">
                    <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                            <livewire:application-form />
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <footer class="bg-red-900">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63z"
                                clip-rule="evenodd" />
                            <path
                                d="M10.333 12.667a2 2 0 112-2 2 2 0 01-2 2zm0 1.111a3.111 3.111 0 100-6.222 3.111 3.111 0 000 6.222z" />
                            <path
                                d="M12 16.2c3.715 0 4.2-.012 4.655-.06 1.12-.058 1.735-.276 2.145-.465a3.785 3.785 0 001.42-1.42c.189-.41.407-1.02.465-2.145.048-.91.06-1.94.06-4.655s-.012-3.74-.06-4.655c-.058-1.12-.276-1.735-.465-2.145a3.785 3.785 0 00-1.42-1.42c-.41-.189-1.02-.407-2.145-.465-.91-.048-1.94-.06-4.655-.06s-3.74.012-4.655.06c-1.12.058-1.735.276-2.145.465a3.785 3.785 0 00-1.42 1.42c-.189.41-.407 1.02-.465 2.145-.048.91-.06 1.94-.06 4.655s.012 3.74.06 4.655c.058 1.12.276 1.735.465 2.145a3.785 3.785 0 001.42 1.42c.41.189 1.02.407 2.145.465.915.048 1.944.06 4.655.06z" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>


                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <p class="text-center text-base text-gray-400">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>



</body>

</html>
