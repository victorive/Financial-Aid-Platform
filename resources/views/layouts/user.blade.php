<!DOCTYPE html>
<html class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fin Aid - @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--maximum-scale=1, user-scalable=no-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header class="w-full fixed z-10 px-2 py-2 bg-white border-b border-b-gray-300 shadow-sm shadow-gray-300/50">
            <div class="mx-auto px-2 md:px-5 flex flex-wrap items-center justify-between">
                <a href="{{ url('/') }}" class="flex items-center space-x-1">
                    <img class="w-10 md:w-12 h-10 md:h-12" src="{{ asset('images/fin-aid.svg') }}" alt="fin-aid">
                    <h2 class="text-xl md:text-2xl font-bold">Fin-Aid</h2>
                </a>

                <button id="profile-button" class="rounded-full p-0 inline-block text-center align-middle text-sm focus:border-2 focus:border-[#24207f]">
                    <div class="h-5 w-5 text-sm max-h-8 max-w-[2rem] min-h-[2rem] min-w-[2rem] rounded-full items-center justify-center relative">
                        <img src="{{ asset('images/avatar.png') }}" alt="Profile picture">
                    </div>
                </button>

                <div id="profile-menu" class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[30px] translate-y-[45px] border border-gray-200 w-32 p-2 z-10 ">
                    <p class="w-full font-bold text-xs uppercase tracking-widest">{{ auth()->user()->firstname}} {{ auth()->user()->lastname}}</p>
                    <a href="{{ route('profile') }}" class="w-full relative flex items-center font-medium text-sm px-2 py-1 rounded hover:bg-[#c9c8eb]">Profile</a>
                    <a href="{{ route('dashboard') }}" class="w-full relative flex items-center font-medium text-sm px-2 py-1 rounded hover:bg-[#c9c8eb]">Dashboard</a>
                    <a href="#" class="w-full relative flex items-center font-medium text-sm px-2 py-1 rounded hover:bg-[#c9c8eb]">Notifications</a>
                    <a href="{{ route('settings') }}" class="w-full relative flex items-center font-medium text-sm px-2 py-1 rounded hover:bg-[#c9c8eb]">Settings</a>
                    <form action="{{ route('logout') }}" method="POST" class="flex hover:bg-[#c9c8eb] rounded-md text-sm">
                        @csrf

                        <button type="submit" class="inline-flex px-2 py-1">Logout</button>
                    </form>
                </div>
            </div>
        </header>

        @yield('content')

        @yield('scripts')

        <script>
            const profilebutton = document.getElementById('profile-button');
            const profilemenu = document.getElementById('profile-menu');
            profilebutton.addEventListener('click', () => {
                profilemenu.classList.toggle('hidden');
            });
        </script>
        <script src="js/image-preview.js"></script>
    </body>
</html>
