<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Setting') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Setting</a></div>
            <div class="breadcrumb-item"><a href="{{ route('setting') }}">Data Setting (DVR)</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="setting" :model="$setting" />
    </div>
</x-app-layout>
