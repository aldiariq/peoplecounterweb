<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Kamera') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Kamera</a></div>
            <div class="breadcrumb-item"><a href="{{ route('kamera') }}">Edit Kamera</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-kamera action="updateKamera" :kameraId="request()->kameraId" />
    </div>
</x-app-layout>
