@extends('layouts.user')
@section('title', 'Pending')
@section('content')
<section class="bg-gray-50 relative top-14 md:top-[65px] flex min-h-screen">
    <div class="flex flex-col items-center m-auto">
        <img class="w-20 h-20" src="{{ asset('images/pending.svg') }}">
        <p class="mt-4">Request sent. Pending Verification!</p>
        <p class="text-xs">Redirecting in <span id="count"></span></p>
    </div>

    @if(session('message'))
    <script>
        let count = 6;

        let counter = setInterval(function(){
            count--;

            let displayfield = document.querySelector('#count');
            displayfield.innerHTML = count;

            if(count === 1){
                clearInterval(counter);
                window.location.href = @php echo json_encode(route('dashboard'))@endphp
            }
        }, 1000);
    </script>
    @endif

</section>
@endsection