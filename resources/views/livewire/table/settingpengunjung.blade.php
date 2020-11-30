<div>
    <x-data-table :data="$data" :model="$settingpengunjung">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('jumlahlantai1')" role="button" href="#">
                    Jumlah Lantai 1
                    @include('components.sort-icon', ['field' => 'junlahlantai1'])
                </a></th>
                <th><a wire:click.prevent="sortBy('jumlahlantai2')" role="button" href="#">
                    Jumlah Lantai 2
                    @include('components.sort-icon', ['field' => 'junlahlantai2'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($settingpengunjung as $datasetting)
                <tr x-data="window.__controller.dataTableController({{ $datasetting->id }})">
                    <td>{{ $datasetting->jumlahlantai1 }}</td>
                    <td>{{ $datasetting->jumlahlantai2 }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/settingpengunjung/edit/{{ $datasetting->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
