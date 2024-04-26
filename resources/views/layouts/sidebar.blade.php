    <!-- Sidebar -->
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-1/6 h-screen transition-transform -translate-x-full xl:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 text-white" style="background-color: #4E9F3D;">
            <a href="{{ route('dashboard') }}">
                <h1 class="text-4xl py-4 text-white">Dashboard</h1>
            </a>
            <div class="flex-col w-3/4">

                <ul class="menu flex-col text-lg">

                    <li>
                        <a href="{{route('calenders.index')}}">
                            <i class="fa fa-calendar inline-block mr-2"></i> Rooster
                        </a>
                    </li> <br>


                    <li>
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-users inline-block mr-2"></i> Medewerkers
                        </a>
                    </li> <br>


                    <li>
                        <a href="{{ route('roles.index') }}">
                            <i class="fa fa-cogs inline-block mr-2"></i> Rollen
                        </a>
                    </li> <br>

                    <li>
                        <a href="{{ route('permissions.index') }}">
                            <i class="fa fa-key inline-block mr-2"></i> Rechten
                        </a>
                    </li> <br>

                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart inline-block mr-2"></i> Producten
                        </a>
                    </li> <br>


                    <li>
                        <a href="#">
                            <i class="fa fa-list inline-block mr-2"></i> Categorieën
                        </a>
                    </li> <br>



                </ul>
            </div>
        </div>
    </aside>






{{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.7/dist/alpine.min.js" defer></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
