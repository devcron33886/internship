<div>
    <form wire:submit="create" class="flex-1 bg-white px-6 py-8 lg:p-12" id="apply" enctype="multipart/form-data">

        {{ $this->form }}

        <x-primary-button class="mt-4">Send application</x-primary-button>
    </form>
</div>
