<div class="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ trans_choice('system.project', $countProject, ['number' => $countProject]) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-5">
                    <x-button type="button" class="bg-white" wire:click="toggleModal" wire:loading.attr="disabled">
                        {{ __('Criar Projeto') }}
                    </x-button>
                    <div class="mt-3 ">
                        <livewire:project-table />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Modal -->
    <x-dialog-modal wire:model.live="showModal">
        <x-slot name="title">
            {{ __('Criar Projeto') }}
        </x-slot>

        <x-slot name="content">
            <form action="" method="post">
                <div class="mt-4" x-data="{}"
                    x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-secondary-button>

            <x-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                {{ __('Salvar') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
