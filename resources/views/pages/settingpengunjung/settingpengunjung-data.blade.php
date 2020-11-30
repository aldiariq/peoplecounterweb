<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Setting Pengunjung') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Setting Pengunjung</a></div>
            <div class="breadcrumb-item"><a href="{{ route('settingpengunjung') }}">Data Setting Pengunjung</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="settingpengunjung" :model="$settingpengunjung" />
    </div>
</x-app-layout>
