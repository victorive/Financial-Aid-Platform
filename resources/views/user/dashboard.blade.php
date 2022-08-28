@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
<section class="px-4 py-10 relative top-14 md:top-[65px] min-h-screen">

  @include('user.donation.index')

</section>
@endsection

