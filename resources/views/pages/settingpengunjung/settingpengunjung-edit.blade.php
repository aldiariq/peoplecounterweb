<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Setting Pengunjung') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Setting Pengunjung</a></div>
            <div class="breadcrumb-item"><a href="{{ route('settingpengunjung') }}">Edit Setting Pengunjung</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-setting-pengunjung action="updateSettingpengunjung" :settingpengunjungId="request()->settingpengunjungId" />
    </div>
</x-app-layout>
