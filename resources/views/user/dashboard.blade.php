@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
<section class="px-6 md:px-12 py-10 relative top-14 md:top-[65px] min-h-screen">

    @include('user.donation.index')

    {{ $donations->links() }}
</section>
@endsection

