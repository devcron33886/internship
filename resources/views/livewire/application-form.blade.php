<form wire:submit="apply">
    <p class="text-md py-3 font-semibold text-black"> All fields with * are mandatory to fill in </p>
    <hr class="w-[75%]">
    <label class="flex flex-col gap-2 mt-4">
        Names *
        <x-text-input type="text" autofocus wire:model="name" class="block mt-2 w-full read-only:opacity-50 read-only:cursor-not-allowed"/>
        @error('name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
    </label>
    <label class="flex flex-col gap-2 mt-4">
        Email(Email we can reach you on) *
        <x-text-input wire:model="email" type="email" class="block mt-2 w-full read-only:opacity-50 read-only:cursor-not-allowed"/>
        @error('email')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
    </label>
    <label class="flex flex-col gap-2 mt-4">
        Phone(Mobile number we can reach you on) *
        <x-text-input wire:model="phone" class="block mt-2 w-full read-only:opacity-50 read-only:cursor-not-allowed"/>
        @error('phone')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
    </label>
    <label class="flex flex-col gap-2 mt-4">
        Are you Applying as? *
       <select id="type" wire:model="type" class="border-gray-300 focus:border-red-800 focus:ring-red-800 rounded-md shadow-sm block mt-2 w-full">
                <option value="" selected disabled>Select how you will work with us</option>
               @foreach(App\Models\Enum\ApplicationType::cases() as $type)
                    <option value="{{ $type->value}}">{{ $type->getLabel()}}</option>
                @endforeach       
        </select>
        @error('type')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
    </label>
    <label class="flex flex-col gap-2 mt-4">
        Which Project are you interested in ? *
        <select id="department" wire:model="department_id" class="border-gray-300 focus:border-red-800 focus:ring-red-800 rounded-md shadow-sm block mt-2 w-full">
                <option value="" selected disabled>Select Project</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
        </select>
        @error('department_id')
            <div class="text-sm text-red-500 font-normal">{{ $message }}</div>
        @enderror
    </label>
    <label class="flex flex-col gap-2 mt-4">
    Tell us a little bit about you *
    <textarea wire:model="biography" rows="5" class="px-3 mt-2 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed"></textarea>
    @error('biography')
    <div class="text-sm text-red-500 font-normal">{{ $message }}</div>
    @enderror
</label>

               

                    
            
    <x-primary-button class="mt-4">Send application</x-primary-button>
</form>

