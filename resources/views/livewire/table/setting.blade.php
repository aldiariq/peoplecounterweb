<div>
    <x-data-table :data="$data" :model="$settings">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('ip_dvr')" role="button" href="#">
                    IP DVR
                    @include('components.sort-icon', ['field' => 'ip_dvr'])
                </a></th>
                <th><a wire:click.prevent="sortBy('user_dvr')" role="button" href="#">
                    User DVR
                    @include('components.sort-icon', ['field' => 'user_dvr'])
                </a></th>
                <th><a wire:click.prevent="sortBy('pass_dvr')" role="button" href="#">
                    Pass DVR
                    @include('components.sort-icon', ['field' => 'pass_dvr'])
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
            @foreach ($settings as $setting)
                <tr x-data="window.__controller.dataTableController({{ $setting->id }})">
                    <td>{{ $setting->id }}</td>
                    <td>{{ $setting->ip_dvr }}</td>
                    <td>{{ $setting->user_dvr }}</td>
                    <td>{{ $setting->pass_dvr }}</td>
                    <td>{{ $setting->created_at->format('d M Y H:i') }}</td>
                    <td>{{ $setting->updated_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/setting/edit/{{ $setting->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
