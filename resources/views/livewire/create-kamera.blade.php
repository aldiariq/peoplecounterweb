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
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="status_reverse" value="{{ __('Lantai') }}" />
                <small>Lantai</small>
                <div wire:ignore>
                    <select id="lantai" class="form-control" wire:model.defer="tbl_kameras.lantai">
                        <option>Pilih Lantai</option>
                        <option value="1">Lantai 1</option>
                        <option value="2">Lantai 2</option>
                    </select>
                </div>
                <x-jet-input-error for="tbl_kameras.lantai" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="jumlah_maksimum" value="{{ __('Jumlah Maksimum') }}" />
                <small>Jumlah Maksimum</small>
                <x-jet-input id="jumlah_maksimum" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.jumlah_maksimum" />
                <x-jet-input-error for="tbl_kameras.jumlah_maksimum" class="mt-2" />
            </div>
    
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="presentasi" value="{{ __('Presentasi') }}" />
                <small>Presentasi</small>
                <x-jet-input id="presentasi" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.presentasi" />
                <x-jet-input-error for="tbl_kameras.presentasi" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="x1" value="{{ __('X1') }}" />
                <small>X1</small>
                <x-jet-input id="x1" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.x1" />
                <x-jet-input-error for="tbl_kameras.x1" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="y1" value="{{ __('Y1') }}" />
                <small>Y1</small>
                <x-jet-input id="y1" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.y1" />
                <x-jet-input-error for="tbl_kameras.y1" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="x2" value="{{ __('X2') }}" />
                <small>X2</small>
                <x-jet-input id="x2" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.x2" />
                <x-jet-input-error for="tbl_kameras.x2" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="y2" value="{{ __('Y2') }}" />
                <small>Y2</small>
                <x-jet-input id="y2" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.y2" />
                <x-jet-input-error for="tbl_kameras.y2" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="x3" value="{{ __('X3') }}" />
                <small>X3</small>
                <x-jet-input id="x3" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.x3" />
                <x-jet-input-error for="tbl_kameras.x3" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="y3" value="{{ __('Y3') }}" />
                <small>Y3</small>
                <x-jet-input id="y3" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.y3" />
                <x-jet-input-error for="tbl_kameras.y3" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="x4" value="{{ __('X4') }}" />
                <small>X4</small>
                <x-jet-input id="x4" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.x4" />
                <x-jet-input-error for="tbl_kameras.x4" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="y4" value="{{ __('Y4') }}" />
                <small>Y4</small>
                <x-jet-input id="y4" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_kameras.y4" />
                <x-jet-input-error for="tbl_kameras.y4" class="mt-2" />
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
