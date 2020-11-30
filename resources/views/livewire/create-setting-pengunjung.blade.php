<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Setting Pengunjung') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk menambahkan setingan pengunjung') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="jumlahlantai1" value="{{ __('Jumlah Pengunjung Lantai 1') }}" />
                <small>Jumlah Pengunjung Lantai 1</small>
                <x-jet-input id="jumlahlantai1" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_settingpengunjung.jumlahlantai1" />
                <x-jet-input-error for="tbl_settingpengunjung.jumlahlantai1" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="jumlahlantai2" value="{{ __('Jumlah Pengunjung Lantai 2') }}" />
                <small>Jumlah Pengunjung Lantai 2</small>
                <x-jet-input id="jumlahlantai2" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_settingpengunjung.jumlahlantai2" />
                <x-jet-input-error for="tbl_settings.jumlahlantai2" class="mt-2" />
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