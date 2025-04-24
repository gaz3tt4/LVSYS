<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <div class="mt-4">
                            <a href="{{ route('contrato') }}">
                                <x-primary-button>Contrato</x-primary-button>
                            </a>
                        </div>
                        <div class="mt-4">
                            <x-primary-button>Galery</x-primary-button>
                        </div>
                        <div class="mt-4">
                            <x-primary-button>Movies</x-primary-button>
                        </div>
                        <div>
                            <x-count-days></x-count-days>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
