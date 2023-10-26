@extends('layouts.app')

@section('content')
    <script>
        function theApp() {
            return {
                theData: null,
                fetchStuff() {
                    fetch("http://localhost:8000/api/v1/reviews")
                        .then(res => res.json())
                        .then(data => {
                            this.theData = data;
                        });
                }
            }
        }
    </script>
    <div class="flex flex-col min-h-screen gap-10 p-10 from-red-100 via-red-300 to-blue-500 bg-gradient-to-br "
        x-data="theApp()" x-init="fetchStuff()">

        <template x-for="product in theData.data" :key="product.id">
            <span x-text="product.brand"></span>
        </template>

        <p>Product 1</p>
        <div
            class="relative
                flex
                h-[220px]
                max-w-3xl
                items-start
                gap-2
                overflow-hidden
                rounded-lg
                shadow-lg">
            <img src="https://p1.pxfuel.com/preview/778/373/101/nature-landscape-rocks-formation-cave-beauty.jpg"
                class="h-full w-[300px] object-cover transition-all duration-300 group-hover:opacity-90">
            <div class="flex flex-col items-start justify-center gap-4 p-4">
                <h2 class="text-2xl font-semibold">Card Title</h2>
                <p class="text-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s</p>
            </div>
            <div class="flex flex-col items-start justify-center gap-4 p-4">
                <button
                    class="px-5 py-2 text-white transition-all duration-300 bg-blue-600 rounded-md shadow-xl hover:bg-blue-700">Button</button>
            </div>
        </div>

    </div>
@endsection
