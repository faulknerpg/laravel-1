@extends('layouts.base')


@section('body')
<div class="w-full">
    @include('layouts.header')


    @isset($cta_top)
        @include('layouts.CTA.registration')
    @endisset


    <main>
        @yield('content')
    </main>


    @isset($cta_bottom)
        @isset($cta_link)
            @include('layouts.CTA.learnmore', [ 'cta_title' => $cta_title, 'cta_text' => $cta_text, 'cta_link' => $cta_link, 'cta_link_title' => $cta_link_title ])
        @endisset

        @empty($cta_link)
            @include('layouts.CTA.registration')
        @endempty
    @endisset

    @include('layouts.footer')

</div>
@endsection
