<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Galeria
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <!-- Barra da galeria -->
                <div class="mb-6">
                    <x-galery_bar></x-galery_bar>
                </div>

                <!-- Grid de Imagens -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    @foreach ($gallerys as $gallery)
                        <div class="gallery-item bg-white dark:bg-gray-700 rounded-lg shadow hover:scale-105 transition-transform duration-300 overflow-hidden">
                            <a target="_blank" href="{{ asset('storage/' . $gallery->url) }}">
                                <img
                                    src="{{ asset('storage/' . $gallery->url) }}"
                                    alt="{{ $gallery->image }}"
                                    class="w-full h-32 object-cover"
                                >
                            </a>
                            <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                <p>{{ $gallery->Image }}</p>
                            </div>
                            <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Excluir</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>







{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" >
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mt-4">
                        <div>
                            <x-galery_bar></x-galery_bar>
                        </div>
                        @foreach ($gallerys as $gallery)
                        <div class="gallery">

                            <div class="gallery-item">
                                    <a target="_blank" href="{{ asset('storage/' . $gallery->url) }}">
                                        <img src="{{ asset('storage/' . $gallery->url) }}" alt="Imagem" width="600" height="400">
                                    </a>
                                <div class="desc">{{ $gallery->image }}</div>
                            </div>
                        </div>
                         @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
