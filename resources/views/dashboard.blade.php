<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto">
            <div
                class="flex flex-col justify-center items-center container mx-auto md:container md:mx-[0%] md:w-full px-6 py-8 bg-[#4E9F3D] ">


                <h3 class="text-white text-3xl font-medium">Welkom : {{ auth()->user()->name }}</h3>
                @if (auth()->user()->roles->isNotEmpty())
                    <p class="text-white">Rol : <b>
                            @foreach (auth()->user()->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </b> </p>
                @endif

            </div>
        </main>
    </div>
    </div>
</x-app-layout>