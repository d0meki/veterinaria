<div>
    @livewire('create-mascota')
    @foreach ($mascotas as $item)
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>
            <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
                <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="w-full md:w-2/5 h-80">
                        <img class="object-center object-cover w-full h-full" src="/storage/{{ $item->image }}"
                            alt="photo">
                    </div>
                    <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
                        <p class="text-xl text-gray-700 font-bold"><strong>Nombre: </strong> {{ $item->nombre }}</p>
                        <p class="text-base text-gray-400 font-normal"><strong>Tipo: </strong>{{ $item->tipo }}</p>
                        <p class="text-base text-gray-400 font-normal"><strong>Raza: </strong>{{ $item->raza }}</p>
                        <p class="text-base text-gray-400 font-normal"><strong>Sexo: </strong>{{ $item->sexo }}</p>
                        <p class="text-base leading-relaxed text-gray-500 font-normal"><strong>Caracteristicas:
                            </strong>{{ $item->caracteristicas }}</p>
                    </div>
                    <x-jet-danger-button>
                        Eliminar
                    </x-jet-danger-button>
                </div>
               
            </section>
        </x-jet-authentication-card>
    @endforeach

</div>
