<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Setting (DVR)') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk menambahkan DVR baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="ip_dvr" value="{{ __('IP DVR') }}" />
                <small>IP DVR</small>
                <x-jet-input id="ip_dvr" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_settings.ip_dvr" />
                <x-jet-input-error for="tbl_settings.ip_dvr" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="user_dvr" value="{{ __('User DVR') }}" />
                <small>User DVR</small>
                <x-jet-input id="user_dvr" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_settings.user_dvr" />
                <x-jet-input-error for="tbl_settings.user_dvr" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="pass_dvr" value="{{ __('Pass DVR') }}" />
                <small>Pass DVR</small>
                <x-jet-input id="pass_dvr" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="tbl_settings.pass_dvr" />
                <x-jet-input-error for="tbl_settings.pass_dvr" class="mt-2" />
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