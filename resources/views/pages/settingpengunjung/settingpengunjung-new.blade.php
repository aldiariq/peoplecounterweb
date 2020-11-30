<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Tambah Setting Pengunjung') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Setting Pengunjung</a></div>
            <div class="breadcrumb-item"><a href="{{ route('settingpengunjung') }}">Tambah Setting Pengunjung</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-setting-pengunjung action="createSettingpengunjung" />
    </div>
</x-app-layout>
