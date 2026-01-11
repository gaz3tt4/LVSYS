<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" >
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mt-4">
                        <h1>1 ano da minha melhor escolha</h1>

                        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                            <video
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                controls>
                                <source src="{{ asset('videos/meu-video.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
