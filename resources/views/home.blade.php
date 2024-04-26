@extends('layouts.app-layout')
@section('content')


    <section class="w-full">
        <div class="hero min-h-screen" style="background-image: url(/assets/img/homebanner.png);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Hallo daar</h1>
                    <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                        exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button class="btn bg-groenevingers text-white rounded-2xl hover:bg-groenevingers border-0">Beginnen</button>
                </div>
            </div>
        </div>

       
        <section>
            <div class="locations flex">
                <div class="location">
                    <img src="/assets/img/locatie_1.png" alt="Locatie 1" class="rounded-lg">
                    <p class="text-center"><b>nuenen</b></p>
                </div>
                <div class="location">
                    <img src="/assets/img/locatie_2.png" alt="Locatie 2" class="rounded-lg">
                    <p class="text-center"><b>centrum</b></p>
                </div>
                <div class="location">
                    <img src="/assets/img/pagebanner.png" alt="Locatie 3" class="rounded-lg">
                    <p class="text-center"><b>poort</b></p>
                </div>
            </div>
        </section>
    </section>
    <section class="py-14 bg-bg-grey w-full " style="text-align: center;">
        <div class="container max-w-7xl mx-auto p-6">
            <div class="responsive">
                @foreach ($products as $product)
                    <div class="product-card p-6" data-toggle="modal">
                        <div class="card w-56 bg-base-100  shadow-[0_0_40px_-20px_rgba(0,0,0,0.17)]">
                            <div data-content="price" class="absolute">
                                <label
                                    class="price bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-tl-[1rem] rounded-br-[1rem] absolute">
                                    {{ $product->price }}
                                </label>
                            </div>
                            <figure>
                                <img data-content="image" class="product-image rounded-t-[1rem]" src="{{ $product->image }}"
                                    alt="{{ $product->name }}" />
                            </figure>
                            <div class="card-body">
                                <div data-content="description" class="hidden">
                                    <p class="text-sm text-left truncate">{{ $product->description }}</p>
                                </div>
                                <h2 class="card-title text-sm text-left truncate" data-content="name">{{ $product->name }}
                                </h2>
                                <div class="card-actions py-2">
                                    <button id="buyButton"
                                        class="btn bg-groenevingers text-white rounded-2xl hover:bg-groenevingers">Buy
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-modal fixed w-screen h-screen z-50 my-auto hidden">
            <dialog class="product-card modal-bottom sm:modal-middle" id="product_modal">
                <div class="modal-box flex flex-col m-auto">
                    <a href="#" class="home-link">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="w-16 h-auto cursor-pointer">
                    </a>
                    <div class="bg-white flex-1 overflow-y-auto py-8">
                        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="flex flex-col md:flex-row -mx-4">
                                <div class="md:flex-1 px-4">
                                    <div class="h-[300px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4 relative">
                                        <img class="image w-full h-full object-cover rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-lg"
                                            src="" alt="">
                                    </div>
                                    <div class="mb-4 flex items-center">
                                        <input type="number" class="w-16 text-center border border-gray-400 rounded-md mr-2"
                                            value="1" id="quantity">
                                        <button
                                            class="btn bg-green-500 text-white py-2 px-4 rounded-full font-bold hover:bg-green-600">Add
                                            to Cart</button>
                                    </div>
                                </div>
                                <div class="md:flex-1 px-4">
                                    <h2 class="name text-2xl font-bold text-black mb-2">Lorem</h2>
                                    <div class="mb-4">
                                        <span class="font-bold text-black">Price:$</span>
                                        <span class="price text-gray-600 dark:text-gray-400"></span>
                                    </div>
                                    <div>
                                        <span class="font-bold text-black">Product Description:</span>
                                        <p class="description text-gray-600 dark:text-gray-400 text-sm mt-2">
                                            Lorem
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 border-gray-300">
                        </div>
                    </div>
                    <form method="dialog">
                        <button class="btn bg-black text-white">Close</button>
                    </form>
                </div>
            </dialog>
    </section>
    <section class="py-14 w-full">
        <div class="container max-w-7xl mx-auto p-6 ">
            <div class="theme-text color-black text-center">
                <h2 class="mb-5 text-5xl font-bold">Lorem Ipsum</h2>
                <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard
                    proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam
                    en
                    ze door elkaar husselde om een font-catalogus te maken. </p>
            </div>
        </div>
    </section>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    let buyButtonElements = document.querySelectorAll('.product-card #buyButton');
    let modalElement = document.getElementById('product_modal');
    let closeModalElement = document.querySelector('#product_modal form button');
    let sectionModal = document.querySelector('.section-modal');

    buyButtonElements.forEach((buyButtonElement) => {
        buyButtonElement.addEventListener('click', (e) => {
            e.preventDefault();
            var modalText = e.target.closest('.product-card').querySelector('[data-content="name"]').textContent;
            var modalImage = e.target.closest('.product-card').querySelector('[data-content="image"]').src;
            var modalPrice = e.target.closest('.product-card').querySelector('[data-content="price"]').textContent;
            var modalDescription = e.target.closest('.product-card').querySelector('[data-content="description"]').textContent;
            modalElement.querySelector('.name').textContent = modalText;
            modalElement.querySelector('.price').textContent = modalPrice;
            modalElement.querySelector('.description').textContent = modalDescription;
            modalElement.querySelector('.image').src = modalImage;
            console.log(modalText + modalImage);
            modalElement.style.display = 'block';
            sectionModal.style.display = 'block';
        });
    });

    if (closeModalElement) {
        closeModalElement.addEventListener('click', (e) => {
            e.preventDefault();
            modalElement.style.display = 'none';
            sectionModal.style.display = 'none';
        });
    } else {
        console.error('Close button could not be found');
    }
});
</script>
@endsection
