@extends('layouts.user')
@section('title', 'Pending')
@section('content')
<section class="bg-gray-50 relative top-14 md:top-[65px] flex min-h-screen">
    <div class="flex flex-col items-center m-auto">
        <img class="w-20 h-20" src="{{ asset('images/pending.svg') }}">
        <p class="mt-4">Request sent. Pending Verification!</p>
    </div>
</section>
@endsection
