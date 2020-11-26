<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Garis Deteksi') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk menambahkan garis deteksi baru') }}
        </x-slot>

        <x-slot name="form">

            @if (strpos(Route::currentRouteName(), "new"))
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="id_kamera" value="{{ __('Nama Kamera') }}" />
                <small>Nama Kamera</small>
                <div>
                    <select id="id_kamera" class="form-control" wire:model.defer="tbl_pengaturangaris.id_kamera">
                        <option>Pilih Kamera</option>
                        @foreach($datakamera as $data)
                    <option value="{{$data->id}}">{{$data->nama_kamera}}</option>
                        @endforeach
                    </select>
                </div>
                <x-jet-input-error for="tbl_pengaturangaris.id_kamera" class="mt-2" />
            </div>
            @else
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="id_kamera" value="{{ __('Nama Kamera') }}" />
                <small>Nama Kamera</small>
                <div>
                    <select disabled id="id_kamera" class="form-control" wire:model.defer="tbl_pengaturangaris.id_kamera">
                        <option>Pilih Kamera</option>
                        @foreach($datakamera as $data)
                    <option value="{{$data->id}}">{{$data->nama_kamera}}</option>
                        @endforeach
                    </select>
                </div>
                <x-jet-input-error for="tbl_pengaturangaris.id_kamera" class="mt-2" />
            </div>
            @endif

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="x1g1" value="{{ __('X1G1') }}" />
                <small>X1G1</small>
                <x-jet-input id="x1g1" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_pengaturangaris.x1g1" />
                <x-jet-input-error for="tbl_pengaturangaris.x1g1" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="y1g1" value="{{ __('Y1G1') }}" />
                <small>Y1G1</small>
                <x-jet-input id="y1g1" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_pengaturangaris.y1g1" />
                <x-jet-input-error for="tbl_pengaturangaris.y1g1" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="x2g1" value="{{ __('X2G1') }}" />
                <small>X2G1</small>
                <x-jet-input id="x2g1" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_pengaturangaris.x2g1" />
                <x-jet-input-error for="tbl_pengaturangaris.x2g1" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="y2g1" value="{{ __('Y2G1') }}" />
                <small>Y2G1</small>
                <x-jet-input id="y2g1" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_pengaturangaris.y2g1" />
                <x-jet-input-error for="tbl_pengaturangaris.y2g1" class="mt-2" />
            </div>         

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="x1g2" value="{{ __('X1G2') }}" />
                <small>X1G2</small>
                <x-jet-input id="x1g2" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_pengaturangaris.x1g2" />
                <x-jet-input-error for="tbl_pengaturangaris.x1g2" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="y1g2" value="{{ __('Y1G2') }}" />
                <small>Y1G2</small>
                <x-jet-input id="y1g1" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_pengaturangaris.y1g2" />
                <x-jet-input-error for="tbl_pengaturangaris.y1g2" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="x2g2" value="{{ __('X2G2') }}" />
                <small>X2G2</small>
                <x-jet-input id="x2g2" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_pengaturangaris.x2g2" />
                <x-jet-input-error for="tbl_pengaturangaris.x2g2" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="y2g1" value="{{ __('Y2G2') }}" />
                <small>Y2G2</small>
                <x-jet-input id="y2g2" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_pengaturangaris.y2g2" />
                <x-jet-input-error for="tbl_pengaturangaris.y2g2" class="mt-2" />
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