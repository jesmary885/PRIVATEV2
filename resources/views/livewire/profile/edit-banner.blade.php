<div>

    <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="$set('open',true)">Editar</a>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Edit
        </x-slot>

        <x-slot name="content">

            <div>
                <p>aqui</p>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button class="mr-2" wire:click="close">
                Cerrar
            </x-secondary-button>

            <x-danger-button wire:click="update" wire:loading.attr="disabled">
                Actualizar
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>
    {{-- Be like water. --}}
</div>
