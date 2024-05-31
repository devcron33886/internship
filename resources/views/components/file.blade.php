<div
    x-data
    x-init="
        FilePond.create($refs.input, {
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $attributes->wire('model')->value() }}', file, load, error, progress)
                },
                revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes->wire('model')->value() }}', filename, load)
                },
            },
        });
    "
    wire:ignore
>
    <label class="flex flex-col gap-2 mt-4">
        Add supportive document (Ex: CV)
        <input type="file" x-ref="input" class="mt-2">
        @error('type')
            <div class="text-sm text-red-500 font-normal">{{ $message }}</div>
        @enderror
    </label>
</div>
