<x-app-layout>
    <div class="mt-16">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Apply Here</h2>
        <div class="bg-white p-6 rounded-md shadow-sm">
            <form wire:submit=" create">
                {{ $this->form }}
            </form>

        </div>
    </div>
</x-app-layout>
