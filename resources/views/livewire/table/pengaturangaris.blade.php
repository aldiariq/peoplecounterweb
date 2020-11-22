<div>
    <x-data-table :data="$data" :model="$pengaturangaris">
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
                <th><a wire:click.prevent="sortBy('x1g1')" role="button" href="#">
                    X1G1
                    @include('components.sort-icon', ['field' => 'x1g1'])
                </a></th>
                <th><a wire:click.prevent="sortBy('y1g1')" role="button" href="#">
                    Y1G1
                    @include('components.sort-icon', ['field' => 'y1g1'])
                </a></th>
                <th><a wire:click.prevent="sortBy('x2g1')" role="button" href="#">
                    X2G1
                    @include('components.sort-icon', ['field' => 'x2g1'])
                </a></th>
                <th><a wire:click.prevent="sortBy('y2g1')" role="button" href="#">
                    Y2G1
                    @include('components.sort-icon', ['field' => 'y2g1'])
                </a></th>
                <th><a wire:click.prevent="sortBy('x1g2')" role="button" href="#">
                    X1G2
                    @include('components.sort-icon', ['field' => 'x1g2'])
                </a></th>
                <th><a wire:click.prevent="sortBy('y1g2')" role="button" href="#">
                    Y1G2
                    @include('components.sort-icon', ['field' => 'y1g2'])
                </a></th>
                <th><a wire:click.prevent="sortBy('x2g2')" role="button" href="#">
                    X2G2
                    @include('components.sort-icon', ['field' => 'x2g2'])
                </a></th>
                <th><a wire:click.prevent="sortBy('y2g2')" role="button" href="#">
                    Y2G2
                    @include('components.sort-icon', ['field' => 'y2g2'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th><a wire:click.prevent="sortBy('updated_at')" role="button" href="#">
                    Tanggal Diupdate
                    @include('components.sort-icon', ['field' => 'updated_at'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($pengaturangaris as $datapengaturangaris)
                <tr x-data="window.__controller.dataTableController({{ $datapengaturangaris->id }})">
                    <td>{{ $datapengaturangaris->id }}</td>
                    <td>{{ $datapengaturangaris->nama_kamera }}</td>
                    <td>{{ $datapengaturangaris->x1g1 }}</td>
                    <td>{{ $datapengaturangaris->y1g1 }}</td>
                    <td>{{ $datapengaturangaris->x2g1 }}</td>
                    <td>{{ $datapengaturangaris->y2g1 }}</td>
                    <td>{{ $datapengaturangaris->x1g2 }}</td>
                    <td>{{ $datapengaturangaris->y1g2 }}</td>
                    <td>{{ $datapengaturangaris->x2g2 }}</td>
                    <td>{{ $datapengaturangaris->y2g2 }}</td>
                    <td>{{ $datapengaturangaris->created_at->format('d M Y H:i') }}</td>
                    <td>{{ $datapengaturangaris->updated_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/pengaturangaris/edit/{{ $datapengaturangaris->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
