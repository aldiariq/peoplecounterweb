<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Kamera') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk menambahkan kamera baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nama_kamera" value="{{ __('Nama Kamera') }}" />
                <small>Nama Kamera</small>
                <x-jet-input id="nama_kamera" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.nama_kamera" />
                <x-jet-input-error for="tbl_kameras.nama_kamera" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="channel_kamera" value="{{ __('Channel Kamera') }}" />
                <small>Channel Kamera</small>
                <x-jet-input id="channel_kamera" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.channel_kamera" />
                <x-jet-input-error for="tbl_kameras.channel_kamera" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="status_reverse" value="{{ __('Status Reverse') }}" />
                <small>Status Reverse</small>
                <div wire:ignore>
                    <select id="status_reverse" class="form-control" wire:model.defer="tbl_kameras.status_reverse">
                        <option>Pilih Status</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <x-jet-input-error for="tbl_kameras.status_reverse" class="mt-2" />
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
