<div>
    <x-data-table :data="$data" :model="$settings">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('max_lantai1')" role="button" href="#">
                    Jumlah Maksimum Lantai 1
                    @include('components.sort-icon', ['field' => 'max_lantai1'])
                </a></th>
                <th><a wire:click.prevent="sortBy('max_lantai2')" role="button" href="#">
                    Jumlah Maksimum Lantai 2
                    @include('components.sort-icon', ['field' => 'max_lantai2'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($settings as $setting)
                <tr x-data="window.__controller.dataTableController({{ $setting->id }})">
                    <td>{{ $setting->max_lantai1 }}</td>
                    <td>{{ $setting->max_lantai2 }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/setting/edit/{{ $setting->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
