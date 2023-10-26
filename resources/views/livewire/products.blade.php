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
            <div
                class="relative
                    flex
                    h-[220px]
                    max-w-4xl
                    items-start
                    gap-2
                    overflow-hidden
                    rounded-lg
                    shadow-lg">
                <img :src="product.image_url"
                    class="h-full w-[300px] object-cover transition-all duration-300 group-hover:opacity-90">
                <div class="flex flex-col items-start justify-center gap-4 p-4">
                    <h2 x-text="product.brand" class="text-2xl font-semibold"></h2>
                    <p x-text="product.description" class="text-base"></p>
                </div>
                <div class="flex flex-col items-start justify-center gap-4 p-4">
                    <button
                        class="px-5 py-2 text-white transition-all duration-300 bg-blue-600 rounded-md shadow-xl hover:bg-blue-700">Button</button>
                </div>
            </div>
        </template>
    </div>
@endsection
