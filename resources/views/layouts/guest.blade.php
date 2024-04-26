@extends('layouts.app-layout')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <style>

.header-nav {
    pointer-events: none;
}

.header-nav li {
    cursor: not-allowed;
}

.header-nav .contact-btn {
    pointer-events: auto;
    cursor: pointer;
}

        </style>
        
{{-- login scherm --}}
    <body class="font-sans text-gray-800 antialiased overflow-hidden"> <!-- overflow-hidden toegevoegd om scrollen te voorkomen -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-bg-grey relative">
            <!-- Hier begint de kopie van de homepagina -->
            <div class="hero min-h-screen w-screen relative" style="background-image: url(/assets/img/homebanner.png); background-size: cover; background-position: center;">
                <div class="hero-overlay bg-opacity-60"></div>
                
                <!-- Inlogscherm binnen de hero sectie -->
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center z-10" style="margin-top: -30px;">
                    <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg relative">
                        <!-- Afbeelding toevoegen boven de e-mailvelden -->
                        <div class="flex justify-left mb-4">
                            <!-- Hier stel je de breedte rechtstreeks in op 24rem -->
                            <img src="assets/img/logo.png" alt="Login Icon" style="width: 70px; height: auto;">
                        </div>
                        <div class="flex justify-center mb-4">
                            <!-- Hier stel je de breedte rechtstreeks in op 24rem -->
                            <img src="assets/img/icon_login.png" alt="Login Icon" style="width: 120px; height: auto;">
                        </div>
                
                        <!-- Inlogscherm inhoud -->
                        {{ $slot }}
                    </div>
                </div>
                
                
                
                
                
                
                <!-- Einde van inlogscherm -->
            </div>
            <!-- Einde van de kopie van de homepagina -->

            <!-- filter -->
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-0 pointer-events-none"></div>
            
            <!-- Header -->
            <header class="w-full bg-gray-900 text-white py-4 px-6 z-20 relative">
                <!-- Header inhoud -->
            </header>
            <!-- Einde van header -->
        </div>
    </body>
    
    
    @endsection
</html>
