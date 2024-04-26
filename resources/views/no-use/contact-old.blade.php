{{-- <!DOCTYPE html>
<html lang="nl">

<head>
    <title>Groene vingers</title>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
</head>

<body>


    <div class="container mx-auto p-20 grid grid-cols-2 gap-x-80 gap-y-20">
        <div>
            <h1 class="text-5xl font-bold mb-4">Heeft u een vraag?</h1>
            <p>We zijn er helemaal klaar voor om al uw vragen te beantwoorden en u te voorzien van de informatie die u
                nodig heeft voor uw tuin. Uw tevredenheid en het creëren van een veilige winkelervaring hebben onze
                hoogste priotiteit. Aarzel niet om contact met ons op te nemen via de onderstaande contactgegevens of
                vul het formulier in. We zullen snel reageren en u graag van dienst zijn. </p>
            <div class="flex items-center mt-4">
                <img src="{{ asset('assets/img/email.png') }}" class="h-12 w-10 mr-2">
                <span class="text-black font-semibold">info@groenevingersshop.com</span>
            </div>
            <div class="flex items-center mt-8">
                <img src="{{ asset('assets/img/phone.png') }}" class="h-12 w-10 mr-2">
                <span class="text-black font-semibold">06-33024999</span>
            </div>
        </div>

        <form class="bg-white" action="#" method="POST">
            <div>
                <label for="name" class="block text-black-700 font-semibold mb-2">Naam <span
                        class="text-red-500">*</span></label>
                <input type="text" id="name" name="name"
                    class="form-input w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="email" class="block text-black-700 font-semibold mb-2">E-mailadres<span
                        class="text-red-500">*</span></label>
                <input type="email" id="email" name="email"
                    class="form-input w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="number" class="block text-black font-semibold mb-2">Telefoonnummer</label>
                <input type="number" id="number" name="number"
                    class="form-input w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="number" class="block text-black font-semibold mb-2">Bericht</label>
                <textarea id="message" name="message" rows="4"
                    class="form-textarea w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                <br><br>
                <input type="submit" value="Versturen"
                    class=" bg-groenevingers text-white font-semibold py-2 px-4 rounded-2xl hover:bg-green-700 transition duration-200">
            </div>
        </form>

        <div>
            <h1 class="text-5xl font-bold mb-4">Route plannen</h1>
            <p>Wil je graag naar tuincentra Groene Vingers? Plan via Google Maps jouw route in. </p>
            <div class="py-4">
                <input type="submit" value="Route Veldhoven"
                    class=" bg-groenevingers text-white font-semibold py-2 px-4 rounded-2xl hover:bg-green-700 transition duration-200">
                <input type="submit" value="Route Neunen"
                    class=" bg-groenevingers text-white font-semibold py-2 px-4 rounded-2xl hover:bg-green-700 transition duration-200">
            </div>
            <div>
                <input type="submit" value="Route Best"
                    class=" bg-groenevingers text-white font-semibold py-2 px-4 rounded-2xl hover:bg-green-700 transition duration-200">
            </div>
        </div>
        <div>
            <iframe class="w-3/5 h-1/1 rounded-2xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.555939684505!2d5.4938226762829325!3d51.466309013704794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d8d3f3dacee7%3A0x1acd712bb57b8792!2sSterrenlaan%2010%2C%205631%20KA%20Eindhoven!5e0!3m2!1sen!2snl!4v1707377973200!5m2!1sen!2snl"></iframe>
        </div>
    </div>
</body>

</html> --}}



{{--

<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Groene vingers</title>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <style>
        @media screen and (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .form-input,
            .form-textarea {
                width: 100%;
            }

            .mt-8 {
                margin-top: 1.5rem;
            }

            .text-5xl {
                font-size: 3rem;
            }

            .flex {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>


    <div class="container mx-auto mt-8 p-8 grid grid-cols-2 gap-20">
        <div>
            <h1 class="text-5xl font-bold mb-4">Heeft u een vraag?</h1>
            <p>We zijn er helemaal klaar voor om al uw vragen te beantwoorden en u te voorzien van de informatie die u
                nodig heeft voor uw tuin. Uw tevredenheid en het creëren van een veilige winkelervaring hebben onze
                hoogste priotiteit. Aarzel niet om contact met ons op te nemen via de onderstaande contactgegevens of
                vul het formulier in. We zullen snel reageren en u graag van dienst zijn. </p>
            <div class="flex items-center mt-4">
                <img src="{{asset('assets/img/email.png')}}" class="h-12 w-10 mr-2">
                <span class="text-black font-semibold">info@groenevingersshop.com</span>
            </div>
            <div class="flex items-center mt-8">
                <img src="{{asset('assets/img/phone.png')}}" class="h-12 w-10 mr-2">
                <span class="text-black font-semibold">06-33024999</span>
            </div>
        </div>

        <form class="bg-white" action="#" method="POST">
            <div>
                <label for="name" class="block text-black-700 font-semibold mb-2">Naam <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name"
                    class="form-input w-full sm:w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="email" class="block text-black-700 font-semibold mb-2">E-mailadres<span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email"
                    class="form-input w-full sm:w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="number" class="block text-black font-semibold mb-2">Telefoonnummer</label>
                <input type="number" id="number" name="number"
                    class="form-input w-full sm:w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="number" class="block text-black font-semibold mb-2">Bericht</label>
                <textarea id="message" name="message" rows="4"
                    class="form-textarea w-full sm:w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                <br><br>
                <input type="submit" value="Versturen"
                    class=" bg-groenevingers text-white font-semibold py-2 px-4 rounded-md hover:bg-green-700 transition duration-200">
            </div>
        </form>
    </div>
</body>

</html> --}}



{{-- <!DOCTYPE html>
<html lang="nl">

<head>
    <title>Groene vingers</title>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <style>
        /* Algemene stijlen */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info img {
            width: 30px;
            height: auto;
            margin-right: 10px;
        }

        .contact-info span {
            font-weight: bold;
        }

        /* Responsieve stijlen */
        @media only screen and (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .form-input,
            .form-textarea {
                width: 100%;
            }
        }
    </style>
</head>

<body>


    <div class="container mx-auto mt-8 p-10 grid grid-cols-2 gap-8">
        <div>
            <h1 class="text-5xl font-bold mb-4">Heeft u een vraag?</h1>
            <p>We zijn er helemaal klaar voor om al uw vragen te beantwoorden en u te voorzien van de informatie die u
                nodig heeft voor uw tuin. Uw tevredenheid en het creëren van een veilige winkelervaring hebben onze
                hoogste prioriteit. Aarzel niet om contact met ons op te nemen via de onderstaande contactgegevens of
                vul het formulier in. We zullen snel reageren en u graag van dienst zijn. </p>
            <div class="contact-info">
                <div class="flex items-center">
                    <img src="{{asset('assets/img/email.png')}}" alt="Email icoon">
                    <span>info@groenevingersshop.com</span>
                </div>
                <div class="flex items-center mt-2">
                    <img src="{{asset('assets/img/phone.png')}}" alt="Telefoon icoon">
                    <span>06-33024999</span>
                </div>
            </div>
        </div>

        <form class="bg-white" action="#" method="POST">
            <div>
                <label for="name" class="block text-black-700 font-semibold mb-2">Naam <span
                        class="text-red-500">*</span></label>
                <input type="text" id="name" name="name"
                    class="form-input w-full sm:w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="email" class="block text-black-700 font-semibold mb-2">E-mailadres<span
                        class="text-red-500">*</span></label>
                <input type="email" id="email" name="email"
                    class="form-input w-full sm:w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="number" class="block text-black font-semibold mb-2">Telefoonnummer</label>
                <input type="number" id="number" name="number"
                    class="form-input w-full sm:w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500">

                <label for="message" class="block text-black font-semibold mb-2">Bericht</label>
                <textarea id="message" name="message" rows="4"
                    class="form-textarea w-full sm:w-3/5 border-black rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                <br><br>
                <input type="submit" value="Versturen"
                    class=" bg-groenevingers text-white font-semibold py-2 px-4 rounded-md hover:bg-green-700 transition duration-200">
            </div>
        </form>
    </div>
</body>

</html> --}}
