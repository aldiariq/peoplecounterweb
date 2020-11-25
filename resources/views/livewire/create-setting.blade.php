<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Setting') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk menambahkan setingan baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="max_lantai1" value="{{ __('Jumlah Maks Lantai 1') }}" />
                <small>Jumlah Maks Lantai 1</small>
                <x-jet-input id="max_lantai1" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_settings.max_lantai1" />
                <x-jet-input-error for="tbl_settings.max_lantai1" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="max_lantai2" value="{{ __('Jumlah Maks Lantai 2') }}" />
                <small>Jumlah Maks Lantai 2</small>
                <x-jet-input id="max_lantai2" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_settings.max_lantai2" />
                <x-jet-input-error for="tbl_settings.max_lantai2" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>