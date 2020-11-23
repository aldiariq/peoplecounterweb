<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Kamera') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}" target="_blank">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Kamera</a></div>
            <div class="breadcrumb-item"><a href="{{ route('kamera') }}">Data Kamera</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="kamera" :model="$kamera" />
    </div>
</x-app-layout>
