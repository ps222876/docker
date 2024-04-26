@extends('layouts.app-layout')

@section('content')
    <section class="w-full bg-opacity-60 bg-cover" style="background-image: url(/assets/img/pagebanner.png);">
        <div class="hero max-w-7xl mx-auto place-items-start content-center min-h-60">
            <div class="hero-content text-left text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">overons</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-bg-grey w-full py-14">
        <div class="container max-w-7xl mx-auto p-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="md:w-1/2 pr-8 mt-4"> 
                    <section class="bg-white py-4 text-left textaboutyou">
                        <div class="container mx-auto mt-4">
                            <p class="text-gray-400">12-03-2024 | Kai Goedhart</p>
                            <div class="border-t p-2 border-gray-300"></div>
                            <p class="text-gray-800  text-sm md:text-base">Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeurig gekozen woorden die nog niet half geloofwaardig ogen. Als u een passage uit Lorum Ipsum gaat gebruiken dient u zich ervan te verzekeren dat er niets beschamends midden in de tekst verborgen zit. Alle Lorum Ipsum generators op Internet hebben de eigenschap voorgedefinieerde stukken te herhalen waar nodig zodat dit de eerste echte generator is op internet. Het gebruikt een woordenlijst van 200 latijnse woorden gecombineerd met een handvol zinsstructuur modellen om een Lorum Ipsum te genereren die redelijk overkomt. De gegenereerde Lorum Ipsum is daardoor altijd vrij van herhaling, ingevoegde humor of ongebruikelijke woorden etc.</p>
                        </div>
                    </section>
                </div>
                <div class="md:w-1/4 pl-8 flex justify-center items-center">
                    <img src="/assets/img/man_gv.png" class="w-full md:w-auto h-auto rounded-lg imgabout" alt="Extra afbeelding">
                    <p class="img_t text-center md:text-left"><b>"Gv: waar elke tuin een groen wonder wordt!"</b></p>
                </div>
            </div>
            <div class="text-center font-semibold mt-8">Hoofdkwartier</div>
            <div class="flex flex-wrap justify-center md:justify-between mt-4">
                <div class="flex flex-col items-center mb-4 md:mb-0">
                    <img src="/assets/img/Anne.png" class="rounded-full w-32 h-32 mb-2">
                    <span class="text-center   font-semibold mt-2 md:mt-4">Manager</span>
                    <span class="text-center">Anne de Weer</span>
                </div>
                <div class="flex flex-col items-center mb-4 md:mb-0">
                    <img src="/assets/img/Bas.png" class="rounded-full w-32 h-32 mb-2">
                    <span class="text-center  font-semibold mt-2 md:mt-4">Directeur</span>
                    <span class="text-center">Bas van Linder</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/assets/img/Remy.png" class="rounded-full w-32 h-32 mb-2">
                    <span class="text-center font-semibold mt-2 md:mt-4">Klantenservice</span>
                    <span class="text-center">Remy Dawn</span>
                </div>
            </div>
        </div>
    </section>
@endsection






{{-- @extends('layouts.app-layout')
@section('content')
    <section class="w-full bg-opacity-60 bg-cover" style="background-image: url(/assets/img/pagebanner.png);">
        <div class="hero max-w-7xl mx-auto place-items-start content-center min-h-60">
            <div class="hero-content text-left text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">overons</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-bg-grey w-full py-14">
        <div class="container max-w-7xl mx-auto p-6">
            <div class="flex justify-between items-center">
                <div class="w-1/2 pr-8 mt-4"> 
                
                    <section class="bg-white py-4 text-left textaboutyou">
                        <div class="container mx-auto mt-4">
                        <p class="text-gray-400">12-03-2024 | Kai Goedhart</p>
                            <div class="border-t p-2 border-gray-300"></div>
                            <p class="text-gray-800  text-sm md:text-base">Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeurig gekozen woorden die nog niet half geloofwaardig ogen. Als u een passage uit Lorum Ipsum gaat gebruiken dient u zich ervan te verzekeren dat er niets beschamends midden in de tekst verborgen zit. Alle Lorum Ipsum generators op Internet hebben de eigenschap voorgedefinieerde stukken te herhalen waar nodig zodat dit de eerste echte generator is op internet. Het gebruikt een woordenlijst van 200 latijnse woorden gecombineerd met een handvol zinsstructuur modellen om een Lorum Ipsum te genereren die redelijk overkomt. De gegenereerde Lorum Ipsum is daardoor altijd vrij van herhaling, ingevoegde humor of ongebruikelijke woorden etc.</p>
                        </div>
                    </section>
                </div>
                <div class="w-1/4 pl-8">
                    <img src="/assets/img/man_gv.png" class="w-full h-auto rounded-lg imgabout" alt="Extra afbeelding">
                    <p class="img_t"><b>"Gv: waar elke tuin een groen wonder wordt!"</b></p>
                </div>
            </div>
            <div class="text-center font-semibold mt-8">Hoofdkwartier</div>
            <div class="flex justify-center space-x-8 mt-4">
                <div class="flex flex-col items-center">
                    <img src="/assets/img/Anne.png" class="rounded-full w-32 h-32 mb-2">
                    <span class="text-center   font-semibold mt-8 ">Manager</span>
                    <span class="text-center">Anne de Weer</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/assets/img/Bas.png" class="rounded-full w-32 h-32 mb-2">
                    <span class="text-center  font-semibold mt-8 ">Directeur</span>
                    <span class="text-center">Bas van Linder</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/assets/img/Remy.png" class="rounded-full w-32 h-32 mb-2">
                    <span class="text-center font-semibold mt-8  ">Klantenservice</span>
                    <span class="text-center">Remy Dawn</span>
                </div>
            </div>
        </div>
    </section>
@endsection --}}