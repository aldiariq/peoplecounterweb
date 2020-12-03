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
                {{-- <th><a wire:click.prevent="sortBy('status_reverse')" role="button" href="#">
                    Status Reverse
                    @include('components.sort-icon', ['field' => 'status_reverse'])
                </a></th> --}}
                <th><a wire:click.prevent="sortBy('lantai')" role="button" href="#">
                    Lantai
                    @include('components.sort-icon', ['field' => 'lantai'])
                </a></th>
                <th><a wire:click.prevent="sortBy('jumlah_maksimum')" role="button" href="#">
                    Jumlah Maksimum
                    @include('components.sort-icon', ['field' => 'jumlah_maksimum'])
                </a></th>
                <th><a wire:click.prevent="sortBy('presentasi')" role="button" href="#">
                    Presentasi
                    @include('components.sort-icon', ['field' => 'presentasi'])
                </a></th>
                <th><a wire:click.prevent="sortBy('x1')" role="button" href="#">
                    X1
                    @include('components.sort-icon', ['field' => 'x1'])
                </a></th>
                <th><a wire:click.prevent="sortBy('y1')" role="button" href="#">
                    Y1
                    @include('components.sort-icon', ['field' => 'y1'])
                </a></th>
                <th><a wire:click.prevent="sortBy('x2')" role="button" href="#">
                    X2
                    @include('components.sort-icon', ['field' => 'x2'])
                </a></th>
                <th><a wire:click.prevent="sortBy('y2')" role="button" href="#">
                    Y2
                    @include('components.sort-icon', ['field' => 'y2'])
                </a></th>
                <th><a wire:click.prevent="sortBy('x3')" role="button" href="#">
                    X3
                    @include('components.sort-icon', ['field' => 'x3'])
                </a></th>
                <th><a wire:click.prevent="sortBy('y3')" role="button" href="#">
                    Y3
                    @include('components.sort-icon', ['field' => 'y3'])
                </a></th>
                <th><a wire:click.prevent="sortBy('x4')" role="button" href="#">
                    X4
                    @include('components.sort-icon', ['field' => 'x4'])
                </a></th>
                <th><a wire:click.prevent="sortBy('y4')" role="button" href="#">
                    Y4
                    @include('components.sort-icon', ['field' => 'y4'])
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
                    {{-- @if ($kamera->status_reverse == 1)
                        <td>Ya</td>
                    @else
                        <td>Tidak</td>
                    @endif --}}
                    <td>{{ $kamera->lantai }}</td>
                    <td>{{ $kamera->jumlah_maksimum }}</td>
                    <td>{{ $kamera->presentasi }}</td>
                    <td>{{ $kamera->x1 }}</td>
                    <td>{{ $kamera->y1 }}</td>
                    <td>{{ $kamera->x2 }}</td>
                    <td>{{ $kamera->y2 }}</td>
                    <td>{{ $kamera->x3 }}</td>
                    <td>{{ $kamera->y3 }}</td>
                    <td>{{ $kamera->x4 }}</td>
                    <td>{{ $kamera->y4 }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/kamera/edit/{{ $kamera->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
