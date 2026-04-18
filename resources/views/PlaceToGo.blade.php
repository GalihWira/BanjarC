@extends('layouts.navbar')

@section('title', 'Home')

@section('place')
    <body>
        <main class="w-full  font-sora bg-primary-50 mt-0 ">
            <section class="relative w-full h-150 flex flex-col items-center justify-center px-4 overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img class="w-full h-full object-cover" src="{{asset('assets/Banner.jpeg')}}" alt="">
                    <div class="absolute inset-0 bg-black/50"></div>
                </div>
                <div class="relative z-10 text-center w-full max-w-4xl flex flex-col items-center mt-15">
                    <h1 class="text-5xl md:text-7xl font-extrabold  text-second-50 mb-3 tracking tracking-wide">
                        Banjar C Places To Go
                    </h1>
                    <h2 class="text-2xl font-serif text-white mb-2">
                        Find the Hidden Gems to Experience in Banjar C
                    </h2>
                    <p class="text-sm text-white text-center max-w-3xl leading-relaxed mb-12 opacity-90 px-4">
                        Explore a variety of destinations in Banjar C, from culinary spots and cultural traditions to natural attractions and unique shopping experiences, including special handmade products by local artisans.
                    </p>
                </div>
                <div class="absolute bottom-8 w-full max-w-5xl z-20 px-4">
                    <div class="relative h-36 rounded-2xl overflow-hidden shadow-xl flex items-center justify-between px-6">
                        <div class="absolute inset-0 z-0">
                            <img class="w-full h-full object-cover" src="{{asset('assets/Culinary.jpeg')}}" alt="">
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>
                        <button class="relative z-10 text-white/70 hover:text-white transition cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                        </svg>
                        </button>
                        <div class="relative z-10 text-center grow">
                        <h3 class="text-5xl font-bold text-white tracking-wide">
                            Culinary
                        </h3>
                        </div>
                        <button class="relative z-10 text-white/70 hover:text-white transition cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                        </svg>
                        </button>
                    </div>
                </div>
            </section>
            <nav class="w-full bg-primary-300">
                <ul class="flex flex-wrap justify-center items-center w-full max-w-6xl mx-auto text-lg font-bold">
                    <li>
                        <a class="block px-6 py-4 text-white" href="">Semua</a>
                    </li>
                    <li class="bg-white shadow-sm">
                        <a class="block px-6 py-4 text-primary" href="">Culinary</a>
                    </li>
                    <li>
                        <a class="block px-6 py-4 text-white" href="">History</a>
                    </li>
                    <li>
                        <a class="block px-6 py-4 text-white" href="">Culture</a>
                    </li>
                    <li>
                        <a class="block px-6 py-4 text-white" href="">View</a>
                    </li>
                    <li>
                        <a class="block px-6 py-4 text-white" href="">Shopping</a>
                    </li>
                </ul>
            </nav>
            <section class="w-full max-w-6xl mx-auto py-12 px-4">
                <div class="grid grid-cols-4 gap-6">
                    <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card />
                </div>
            </section>
            <div class="w-full bg-primary-200 py-4">
                <div class="max-w-6xl mx-auto px-8">
                    <h2 class="text-white font-bold text-2xl md:text-3xl tracking-wide">History</h2>
                </div>
            </div>
            <section class="w-full bg-banjar-dark py-10 px-8">
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card />
                </div>
            </section>

            <div class="w-full bg-primary-200 py-4">
                <div class="max-w-6xl mx-auto px-8">
                    <h2 class="text-white font-bold text-2xl md:text-3xl tracking-wide">Culture</h2>
                </div>
            </div>
            <section class="w-full bg-white py-10 px-8">
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card />
                </div>
            </section>

            <div class="w-full bg-primary-200 py-4">
                <div class="max-w-6xl mx-auto px-8">
                    <h2 class="text-white font-bold text-2xl md:text-3xl tracking-wide">Nature Views</h2>
                </div>
            </div>
            <section class="w-full bg-banjar-dark py-10 px-8">
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card />
                </div>
            </section>

            <div class="w-full bg-primary-200 py-4">
                <div class="max-w-6xl mx-auto px-8">
                    <h2 class="text-white font-bold text-2xl md:text-3xl tracking-wide">Shopping Spots</h2>
                </div>
            </div>
            <section class="w-full bg-white py-10 px-8 pb-16">
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-culinary-card /> <x-culinary-card /> <x-culinary-card /> <x-culinary-card />
                </div>
            </section>
        </main>
    </body>

    @include('layouts.footer')
@endsection
