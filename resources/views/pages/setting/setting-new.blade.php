<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Tambah Setting (DVR) Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Setting</a></div>
            <div class="breadcrumb-item"><a href="{{ route('setting') }}">Tambah Setting (DVR) Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-setting action="createSetting" />
    </div>
</x-app-layout>
