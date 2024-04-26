@extends('layouts.app-layout')
@section('content')
<section class="w-full">
    <div class="hero" style="background-image: url(/assets/img/homebanner.png);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero max-w-7xl mx-auto place-items-start content-center min-h-60">
            <div class="hero-content text-left text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold text-white">Contact</h1>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="py-14">
        <div class="container max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-60">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Heeft u een vraag?</h1>
                <p>We zijn er helemaal klaar voor om al uw vragen te beantwoorden en u te voorzien van de informatie die u
                    nodig heeft voor uw tuin. Uw tevredenheid en het creëren van een veilige winkelervaring hebben onze
                    hoogste priotiteit. Aarzel niet om contact met ons op te nemen via de onderstaande contactgegevens of
                    vul het formulier in. We zullen snel reageren en u graag van dienst zijn. </p>
                <div class="flex items-center mt-4">
                    <img src="{{ asset('assets/img/email.png') }}" class="h-10 md:h-12 w-8 md:w-10 mr-2">
                    <span class="text-black font-semibold">info@groenevingersshop.com</span>
                </div>
                <div class="flex items-center mt-4 md:mt-8">
                    <img src="{{ asset('assets/img/phone.png') }}" class="h-10 md:h-12 w-8 md:w-10 mr-2">
                    <span class="text-black font-semibold">06-33024999</span>
                </div>
            </div>
            <div class="w-full">
                <form class="bg-white shadow-[0_0_40px_-20px_rgba(0,0,0,0.17)] p-10 rounded-3xl" action="#"
                    method="POST">
                    <div>
                        <label for="name" class="block text-black-700 font-semibold mb-2">Naam <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name"
                            class="form-input w-full border-black rounded-lg focus:outline-none focus:border-blue-500">

                        <label for="email" class="block text-black-700 font-semibold mb-2">E-mailadres<span
                                class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email"
                            class="form-input w-full border-black rounded-lg focus:outline-none focus:border-blue-500">

                        <label for="number" class="block text-black font-semibold mb-2">Telefoonnummer</label>
                        <input type="number" id="number" name="number"
                            class="form-input w-full  border-black rounded-lg focus:outline-none focus:border-blue-500">

                        <label for="number" class="block text-black font-semibold mb-2">Bericht</label>
                        <textarea id="message" name="message" rows="4"
                            class="form-textarea w-full  border-black rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                        <br><br>
                        <input type="submit" value="Versturen"
                            class=" bg-groenevingers text-white font-semibold py-2 px-4 rounded-2xl hover:bg-green-700 transition duration-200">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="bg-bg-grey w-full py-14">
        <div class="container max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Route plannen</h1>
                <p>Wil je graag naar tuincentra Groene Vingers? Plan via Google Maps jouw route in. </p>
                <div class="flex py-4">
                    <div class="pr-4">
                        <div
                            class="bg-groenevingers text-white font-semibold flex w-48 py-2 px-4 rounded-2xl hover:bg-green-700 transition duration-200">
                            <svg class="fill-white w-7" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                        }
                                    </style>
                                </defs>
                                <title />
                                <g data-name="Layer 2" id="Layer_2">
                                    <path
                                        d="M22,19a1,1,0,0,1-.7-.28l-4.24-4.1a6.67,6.67,0,0,1,0-9.64h0a7.17,7.17,0,0,1,9.88,0,6.67,6.67,0,0,1,0,9.64l-4.24,4.1A1,1,0,0,1,22,19ZM22,5a5.07,5.07,0,0,0-3.55,1.42h0a4.66,4.66,0,0,0,0,6.76L22,16.61l3.55-3.43a4.66,4.66,0,0,0,0-6.76A5.09,5.09,0,0,0,22,5Zm-4.24.7h0Z" />
                                    <path
                                        d="M11,29a1,1,0,0,1-.5-.13l-7-4A1,1,0,0,1,3,24V6a1,1,0,0,1,.5-.87,1,1,0,0,1,1,0l7,4A1,1,0,0,1,12,10V28a1,1,0,0,1-.5.87A1,1,0,0,1,11,29ZM5,23.42l5,2.86V10.58L5,7.72Z" />
                                    <path
                                        d="M11,29a1,1,0,0,1-.5-.13A1,1,0,0,1,10,28V10a1,1,0,0,1,.5-.87l6-3.43a1,1,0,0,1,1.37.38,1,1,0,0,1-.37,1.36L12,10.58v15.7l5.5-3.15a1,1,0,1,1,1,1.74l-7,4A1,1,0,0,1,11,29Z" />
                                    <path
                                        d="M25,29a1,1,0,0,1-.5-.13l-7-4A1,1,0,0,1,17,24V15a1,1,0,0,1,2,0v8.42l5,2.86V16a1,1,0,0,1,2,0V28a1,1,0,0,1-.5.87A1,1,0,0,1,25,29Z" />
                                    <path d="M22,13a3,3,0,1,1,3-3A3,3,0,0,1,22,13Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,22,9Z" />
                                </g>
                                <g id="frame">
                                    <rect class="cls-1" height="32" width="32" />
                                </g>
                            </svg>
                            <input type="submit" value="Route Veldhoven">
                        </div>
                    </div>

                    <div class="pr-8">
                        <div
                            class="bg-groenevingers text-white font-semibold flex w-48 py-2 px-4 rounded-2xl hover:bg-green-700 transition duration-200">
                            {{-- <img class="w-7 pr-2 " src="{{asset('assets/img/route.png')}}" alt=""> --}}
                            <svg class="fill-white w-7" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                        }
                                    </style>
                                </defs>
                                <title />
                                <g data-name="Layer 2" id="Layer_2">
                                    <path
                                        d="M22,19a1,1,0,0,1-.7-.28l-4.24-4.1a6.67,6.67,0,0,1,0-9.64h0a7.17,7.17,0,0,1,9.88,0,6.67,6.67,0,0,1,0,9.64l-4.24,4.1A1,1,0,0,1,22,19ZM22,5a5.07,5.07,0,0,0-3.55,1.42h0a4.66,4.66,0,0,0,0,6.76L22,16.61l3.55-3.43a4.66,4.66,0,0,0,0-6.76A5.09,5.09,0,0,0,22,5Zm-4.24.7h0Z" />
                                    <path
                                        d="M11,29a1,1,0,0,1-.5-.13l-7-4A1,1,0,0,1,3,24V6a1,1,0,0,1,.5-.87,1,1,0,0,1,1,0l7,4A1,1,0,0,1,12,10V28a1,1,0,0,1-.5.87A1,1,0,0,1,11,29ZM5,23.42l5,2.86V10.58L5,7.72Z" />
                                    <path
                                        d="M11,29a1,1,0,0,1-.5-.13A1,1,0,0,1,10,28V10a1,1,0,0,1,.5-.87l6-3.43a1,1,0,0,1,1.37.38,1,1,0,0,1-.37,1.36L12,10.58v15.7l5.5-3.15a1,1,0,1,1,1,1.74l-7,4A1,1,0,0,1,11,29Z" />
                                    <path
                                        d="M25,29a1,1,0,0,1-.5-.13l-7-4A1,1,0,0,1,17,24V15a1,1,0,0,1,2,0v8.42l5,2.86V16a1,1,0,0,1,2,0V28a1,1,0,0,1-.5.87A1,1,0,0,1,25,29Z" />
                                    <path d="M22,13a3,3,0,1,1,3-3A3,3,0,0,1,22,13Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,22,9Z" />
                                </g>
                                <g id="frame">
                                    <rect class="cls-1" height="32" width="32" />
                                </g>
                            </svg>
                            <input type="submit" value="Route Nuenen">
                        </div>
                    </div>
                </div>

                <div
                    class="bg-groenevingers text-white font-semibold flex w-48 py-2 px-4 rounded-2xl hover:bg-green-700 transition duration-200">
                    {{-- <img class="w-7 pr-2 " src="{{asset('assets/img/route.png')}}" alt=""> --}}
                    <svg class="fill-white w-7" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                }
                            </style>
                        </defs>
                        <title />
                        <g data-name="Layer 2" id="Layer_2">
                            <path
                                d="M22,19a1,1,0,0,1-.7-.28l-4.24-4.1a6.67,6.67,0,0,1,0-9.64h0a7.17,7.17,0,0,1,9.88,0,6.67,6.67,0,0,1,0,9.64l-4.24,4.1A1,1,0,0,1,22,19ZM22,5a5.07,5.07,0,0,0-3.55,1.42h0a4.66,4.66,0,0,0,0,6.76L22,16.61l3.55-3.43a4.66,4.66,0,0,0,0-6.76A5.09,5.09,0,0,0,22,5Zm-4.24.7h0Z" />
                            <path
                                d="M11,29a1,1,0,0,1-.5-.13l-7-4A1,1,0,0,1,3,24V6a1,1,0,0,1,.5-.87,1,1,0,0,1,1,0l7,4A1,1,0,0,1,12,10V28a1,1,0,0,1-.5.87A1,1,0,0,1,11,29ZM5,23.42l5,2.86V10.58L5,7.72Z" />
                            <path
                                d="M11,29a1,1,0,0,1-.5-.13A1,1,0,0,1,10,28V10a1,1,0,0,1,.5-.87l6-3.43a1,1,0,0,1,1.37.38,1,1,0,0,1-.37,1.36L12,10.58v15.7l5.5-3.15a1,1,0,1,1,1,1.74l-7,4A1,1,0,0,1,11,29Z" />
                            <path
                                d="M25,29a1,1,0,0,1-.5-.13l-7-4A1,1,0,0,1,17,24V15a1,1,0,0,1,2,0v8.42l5,2.86V16a1,1,0,0,1,2,0V28a1,1,0,0,1-.5.87A1,1,0,0,1,25,29Z" />
                            <path d="M22,13a3,3,0,1,1,3-3A3,3,0,0,1,22,13Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,22,9Z" />
                        </g>
                        <g id="frame">
                            <rect class="cls-1" height="32" width="32" />
                        </g>
                    </svg>
                    <input type="submit" value="Route Best">
                </div>
            </div>
            <div>
                <iframe class="w-full h-96 md:h-auto md:min-h-80 rounded-2xl"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.555939684505!2d5.4938226762829325!3d51.466309013704794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d8d3f3dacee7%3A0x1acd712bb57b8792!2sSterrenlaan%2010%2C%205631%20KA%20Eindhoven!5e0!3m2!1sen!2snl!4v1707377973200!5m2!1sen!2snl"></iframe>
            </div>
        </div>
    </section>
@endsection
