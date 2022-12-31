<div class="w-full mx-auto">
    <a href="{{ url('/askfordonation') }}" class="w-full md:w-auto bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-3 px-3 leading-relaxed">Ask for donation
      <svg class="inline w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
    </a>

    @if($donations->count())
        <div class="mb-4 grid grid-cols-1 mt-14 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-16 lg:gap-x-12 gap-y-20">

            @foreach($donations as $donation)
            <div class="rounded-lg shadow-lg shadow-gray-500/50 duration-500 hover:scale-105">
                <a href="{{ url('donations/' . $donation->slug) }}">
                    <img class="object-cover w-full h-40" src="{{ $donation->image ? asset('storage/'. $donation->image) : asset('images/charity.webp') }}" alt="donation image"/>
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-700">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h4>
                        <p class="text-sm leading-normal text-gray-700 line-clamp-3">{{ $donation->story }}</p>
                        <p class="text-sm font-semibold leading-normal">Amount Needed: ₦{{ $donation->amount }}</p>
                        @switch($donation->status)
                            @case(1)
                                <a class="text-sm text-green-500">Approved</a>
                                @break

                            @case(2)
                                <a class="text-sm text-red-500">Rejected</a>
                                @break

                            @default
                                <a class="text-sm text-yellow-500">Pending</a>
                        @endswitch
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    @else
        <div>
            <img class="w-6/12 mx-auto mt-16 mb-4 sm:w-3/12" src="{{ asset('images/illustration2.svg') }}">
            <h2 class="text-lg font-medium text-center text-gray-500">Nothing here yet!</h2>
        </div>
    @endif
</div>
