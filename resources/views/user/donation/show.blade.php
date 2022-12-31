@extends('layouts.user')
@section('title', "$pageTitle". "'s Fundraiser")
@section('content')

    <article class="px-4 py-24 mx-auto max-w-7xl">
        <a onclick="history.back()" class="cursor-pointer">
            <svg class="mb-4" xmlns="http://www.w3.org/2000/svg" version="1.0" width="25.000000pt" height="25.000000pt" viewBox="0 0 50.000000 50.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M155 456 c-60 -28 -87 -56 -114 -116 -36 -79 -19 -183 42 -249 33 -36 115 -71 167 -71 52 0 134 35 167 71 34 37 63 110 63 159 0 52 -35 134 -71 167 -37 34 -110 63 -159 63 -27 0 -65 -10 -95 -24z m180 -15 c128 -58 164 -223 72 -328 -101 -115 -283 -88 -348 52 -79 171 104 354 276 276z"/>
                    <path d="M160 295 l-44 -45 46 -47 c26 -26 51 -44 54 -40 4 4 -8 23 -26 42 l-34 35 112 0 c68 0 112 4 112 10 0 6 -44 10 -112 10 l-112 0 32 33 c18 18 32 36 32 40 0 16 -18 4 -60 -38z"/>
                </g>
            </svg>
        </a>

        <div class="w-full mx-auto mb-12 text-left md:w-3/4 lg:w-1/2">
            <img src="{{ $donation->image ? asset('storage/' . $donation->image) : asset('images/charity.webp') }}" class="object-cover w-full h-64 rounded-lg" alt="{{ auth()->user()->firstname}}'s fundraiser">

            <h1 class="mb-3 text-2xl font-bold leading-tight text-gray-900 md:text-4xl" itemprop="headline" title="{{ auth()->user()->firstname}}'s fundraiser">
                {{ auth()->user()->firstname . " " . auth()->user()->lastname }} is requesting for a donation
            </h1>

            <div class="flex items-center">
                <img class="h-10 w-10 rounded-full" src="{{ asset('images/avatar.png') }}" alt="Photo of {{ auth()->user()->firstname}}">
                <div class="ml-2">
                    <h2 class="text-sm font-semibold">{{ auth()->user()->firstname . " " . auth()->user()->lastname }}</h2>
                    <p class="text-sm text-gray-500">{{ $donation->created_at->format('d-M-Y') }}</p>
                </div>
            </div>

            <p class="mt-6 mb-2 text-xs font-semibold tracking-wider uppercase text-[#24207f]">Reason for request</p>

            <div class="w-full mx-auto text-lg flex items-center justify-center">
                <p>{{ $donation->story }}</p>
            </div>
        </div>
    </article>
@endsection
