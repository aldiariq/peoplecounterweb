<div>
    <x-data-table :data="$data" :model="$kameras">
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
                <th><a wire:click.prevent="sortBy('channel_kamera')" role="button" href="#">
                    Channel Kamera
                    @include('components.sort-icon', ['field' => 'channel_kamera'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th><a wire:click.prevent="sortBy('updated_at')" role="button" href="#">
                    Tanggal Diupdate
                    @include('components.sort-icon', ['field' => 'updated_at'])
                </a></th>
                <th><a wire:click.prevent="sortBy('status_reverse')" role="button" href="#">
                    Status Reverse
                    @include('components.sort-icon', ['field' => 'status_reverse'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($kameras as $kamera)
                <tr x-data="window.__controller.dataTableController({{ $kamera->id }})">
                    <td>{{ $kamera->id }}</td>
                    <td>{{ $kamera->nama_kamera }}</td>
                    <td>{{ $kamera->channel_kamera }}</td>
                    <td>{{ $kamera->created_at->format('d M Y H:i') }}</td>
                    <td>{{ $kamera->updated_at->format('d M Y H:i') }}</td>
                    @if ($kamera->status_reverse == 1)
                        <td>Ya</td>
                    @else
                        <td>Tidak</td>
                    @endif
                    {{-- <td>{{ $kamera->status_reverse }}</td> --}}
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/kamera/edit/{{ $kamera->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
