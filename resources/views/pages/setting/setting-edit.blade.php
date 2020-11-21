<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Setting (DVR)') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Setting</a></div>
            <div class="breadcrumb-item"><a href="{{ route('setting') }}">Edit Setting (DVR)</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-setting action="updateSetting" :settingId="request()->settingId" />
    </div>
</x-app-layout>
