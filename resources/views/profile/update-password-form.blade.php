<x-form-section submit="updatePassword">
    <x-slot name="title">
        Actualiza contraseña
    </x-slot>

    <x-slot name="description">

        Asegúrese de que su cuenta utilice una contraseña larga y aleatoria para mantenerse segura.
       
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Current Password') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('New Password') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <p class="text-gray-500 text-sm  text-justify">
                Password requirements:
                Ensure that these requirements are met:
                At least 10 characters (and up to 100 characters)
                At least one lowercase character
                Inclusion of at least one special character, e.g., ! @ # ?
                Some text here zoltan
            </p>
        </div>

        
    </x-slot>

    <x-slot name="actions">

        
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
