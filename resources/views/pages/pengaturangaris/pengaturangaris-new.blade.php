<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Tambah Pengaturan Garis') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Pengaturan Garis</a></div>
            <div class="breadcrumb-item"><a href="{{ route('pengaturangaris') }}">Tambah Pengaturan Garis</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-pengaturangaris action="createPengaturangaris" />
    </div>
</x-app-layout>
