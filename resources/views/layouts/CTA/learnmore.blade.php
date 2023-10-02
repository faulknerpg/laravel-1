
<div class="flex p-4 justify-between mx-auto w-full group sm:flex space-x-6 bg-white bg-opacity-50 from-blue-500 via-red-300 to-red-100 bg-gradient-to-br">
    <div class="mx-auto  max-w-3xl">
        @if(isset($cta_title))
            <h2 class="text-center text-3xl font-bold mb-5 mt-10">{{ $cta_title }}</h2>
        @else
            <h2 class="text-center text-3xl font-bold mb-5 mt-10">Learn more</h2>
        @endif
        @if(isset($cta_text))
            <p class="text-center">{{ $cta_text }}</p>
        @else
            <p class="text-center">Maltagliati campanelle croxetti fagioloni cavatelli casarecce pennette calamarata fusilli bucati.</p>
        @endif
        <div class="text-center text-2xl font-bold mb-10 mt-5">
            @if(isset($cta_link_title))
                <a href="{{ $cta_link }}" class="text-gray-800 px-4 py-2 rounded-tl-lg rounded-bl-lg bg-gray-200">{{ $cta_link_title }}</a>
            @else
                <a href="{{ $cta_link }}" class="text-gray-800 px-4 py-2 rounded-tl-lg rounded-bl-lg bg-gray-200">Click Here</a>
            @endif

        </div>
    </div>
</div>
