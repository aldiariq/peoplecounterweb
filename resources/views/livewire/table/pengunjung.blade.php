<div>
    <x-data-table :data="$data" :model="$pengunjung">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nama_kamera')" role="button" href="#">
                    Nama Kamera
                    @include('components.sort-icon', ['field' => 'nama_kamera'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th><a wire:click.prevent="sortBy('updated_at')" role="button" href="#">
                    Tanggal Diubah
                    @include('components.sort-icon', ['field' => 'updated_at'])
                </a></th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($pengunjung as $datapengunjung)
                <tr x-data="window.__controller.dataTableController({{ $datapengunjung->id }})">
                    <td>{{ $datapengunjung->id }}</td>
                    <td>{{ $datapengunjung->nama_kamera }}</td>
                    <td>{{ $datapengunjung->updated_at->format('d M Y H:i') }}</td>
                    <td>{{ $datapengunjung->updated_at->format('d M Y H:i') }}</td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
