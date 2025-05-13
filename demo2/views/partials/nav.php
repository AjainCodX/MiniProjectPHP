<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="<?= urlIs("/")?"text-white bg-gray-900" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?>rounded-md  px-3 py-2 text-sm font-medium " aria-current="page">Home</a>
                        <a href="/about" class="<?= urlIs("/about")?"text-white bg-gray-900" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?>rounded-md  px-3 py-2 text-sm font-medium ">About US</a>
                        <a href="/notes" class="<?= urlIs("/notes")?"text-white bg-gray-900" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?>rounded-md  px-3 py-2 text-sm font-medium ">Notes </a>
                        <a href="/contact" class="<?= urlIs("/contact")?"text-white bg-gray-900" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?>rounded-md px-3 py-2 text-sm font-medium ">Contact</a>
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <div>
                        <?php if($_SESSION['user'] ?? false ):?>
                        <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                        <?php else:  ?>
                            <a href="/register" class="<?= urlIs("/register")?"text-white bg-gray-900" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?>rounded-md px-3 py-2 text-sm font-medium ">Register</a>
                            <a href="/login" class="<?= urlIs("/login")?"text-white bg-gray-900" : "text-gray-300 hover:bg-gray-700 hover:text-white" ?>rounded-md px-3 py-2 text-sm font-medium ">LogIn</a>
                        <?php endif; ?>
                    </div>

                </div>
                <?php if($_SESSION['user'] ?? false ):?>
                <div class="ml-3">
                    <form method = "POST" action = '/sessions'>
                        <input type = 'hidden' name="_method" value="DELETE" />

                        <button class="text-white">Log Out</button>
                    </form>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>

</nav>

