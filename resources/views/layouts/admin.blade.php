<!DOCTYPE html>
<html class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fin Aid - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header class="w-full fixed z-10 px-2 py-2 bg-white border-b border-b-gray-300 shadow-sm shadow-gray-300/50">
            <div class="mx-auto px-2 md:px-5 flex flex-wrap items-center justify-between">
                <a href="{{ url('/') }}" class="flex items-center space-x-1">
                    <img class="w-10 md:w-12 h-10 md:h-12" src="{{ asset('images/fin-aid.svg') }}" alt="fin-aid">
                    <h2 class="text-xl md:text-2xl font-bold">Fin-Aid</h2>
                </a>

                <svg id="menu-button" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    
                <div id="menu" class="hidden w-full md:w-auto md:flex items-center relative">
                    <ul class="pt-2 md:flex md:justify-between md:space-x-2">
                        <li><a href="{{ url('/') }}" class="px-3 py-2 hover:bg-[#c9c8eb] rounded-md text-sm block">Home</a></li>
                        <li><a href="{{ route('dashboard') }}" class="px-3 py-2 hover:bg-[#c9c8eb] rounded-md text-sm block">Dashboard</a></li>
                        <li><a href="{{ url('/') }}" class="px-3 py-2 rounded-md text-sm font-bold block">Admin</a></li>
                        <li>
                            <button id="profile-button" class="rounded-full p-0 inline-block text-center align-middle text-sm">
                                <div class="h-5 w-5 text-sm max-h-[2rem] max-w-[2rem] min-h-[2rem] min-w-[2rem] rounded-full items-center justify-center relative">
                                    <img src="{{ asset('images/avatar.png') }}" alt="Profile picture">
                                </div>
                            </button>

                            <div id="profile-menu" class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[30px] translate-y-[25px] border border-gray-200 w-36 p-2 z-10 ">
                                <a href="{{ route('profile') }}" class="w-full relative flex items-center font-medium text-sm px-2 py-2 rounded hover:bg-[#c9c8eb]">Profile</a>
                                <a href="{{ route('settings') }}" class="w-full relative flex items-center font-medium text-sm px-2 py-2 rounded hover:bg-[#c9c8eb]">Settings</a>
                                <form action="{{ route('logout') }}" method="POST" class="flex hover:bg-[#c9c8eb] rounded-md text-sm">
                                    @csrf
                                    <button type="submit" class="inline-flex px-2 py-2">Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="px-4 md:px-7 mx-auto border-t border-t-gray-300">
            <div class="block md:flex md:justify-between md:items-center py-5">
                <p class="text-sm text-gray-600">Built by OVI for use by all!</p>
                <p class="text-sm text-gray-600">Copyright &copy; {{ date('Y') }} OVI</p>
            </div>
        </footer>

        @yield('scripts')

        <script>
            const profilebutton = document.getElementById('profile-button');
            const profilemenu = document.getElementById('profile-menu');
            profilebutton.addEventListener('click', () => {
                profilemenu.classList.toggle('hidden');
            });

            const button = document.getElementById('menu-button');
            const menu = document.getElementById('menu')
            button.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        </script>
    </body>
</html>