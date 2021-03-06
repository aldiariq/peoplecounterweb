<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;

    public $model;
    public $name;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = false;
    public $search = '';

    protected $listeners = ["deleteItem" => "delete_item"];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function get_pagination_data()
    {
        switch ($this->name) {
            case 'user':
                $users = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.user',
                    "users" => $users,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('user.new'),
                            'create_new_text' => 'Tambah User Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            case 'kamera':
                $kameras = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.kamera',
                    "kameras" => $kameras,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('kamera.new'),
                            'create_new_text' => 'Tambah Kamera Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            case 'setting':
                $settings = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                if ($settings->count() > 0) {
                    return [
                        "view" => 'livewire.table.setting',
                        "settings" => $settings,
                        "data" => array_to_object([
                            'href' => NULL
                        ])
                    ];
                } else {
                    return [
                        "view" => 'livewire.table.setting',
                        "settings" => $settings,
                        "data" => array_to_object([
                            'href' => [
                                'create_new' => route('setting.new'),
                                'create_new_text' => 'Tambah Settingan Baru',
                                'export' => '#',
                                'export_text' => 'Export'
                            ]
                        ])
                    ];
                }
                break;

            case 'pengaturangaris':
                $pengaturangaris = $this->model::search($this->search)
                    ->join('tbl_kameras', 'tbl_kameras.id', '=', 'tbl_pengaturangaris.id_kamera')
                    ->select('tbl_pengaturangaris.*', 'tbl_kameras.nama_kamera')
                    ->orderBy('tbl_pengaturangaris.id', $this->sortAsc ? 'desc' : 'asc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.pengaturangaris',
                    "pengaturangaris" => $pengaturangaris,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('pengaturangaris.new'),
                            'create_new_text' => 'Tambah Garis Deteksi Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

                // case 'pengunjung':
                //     $pengunjung = $this->model::search($this->search)
                //     ->join('tbl_kameras', 'tbl_kameras.id', '=', 'tbl_pengunjungs.id_kamera')
                //     ->select('tbl_pengunjungs.*', 'tbl_kameras.nama_kamera')
                //     ->orderBy('tbl_pengunjungs.id', $this->sortAsc ? 'desc' : 'asc')
                //     ->paginate($this->perPage);

                //     return [
                //         "view" => 'livewire.table.pengunjung',
                //         "pengunjung" => $pengunjung,
                //         "data" => array_to_object([
                //             'href' => [
                //                 'create_new' => route('pengunjung.reset'),
                //                 'create_new_text' => 'Reset Data Pengunjung',
                //                 'export' => '#',
                //                 'export_text' => 'Export'
                //             ]
                //         ])
                //     ];
                //     break;

            case 'settingpengunjung':
                $settingpengunjung = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                if ($settingpengunjung->count() > 0) {
                    return [
                        "view" => 'livewire.table.settingpengunjung',
                        "settingpengunjung" => $settingpengunjung,
                        "data" => array_to_object([
                            'href' => NULL
                        ])
                    ];
                } else {
                    return [
                        "view" => 'livewire.table.settingpengunjung',
                        "settingpengunjung" => $settingpengunjung,
                        "data" => array_to_object([
                            'href' => [
                                'create_new' => route('settingpengunjung.new'),
                                'create_new_text' => 'Tambah Data Pengunjung',
                                'export' => '#',
                                'export_text' => 'Export'
                            ]
                        ])
                    ];
                }
                break;

            default:
                # code...
                break;
        }
    }

    public function delete_item($id)
    {
        $data = $this->model::find($id);

        if (!$data) {
            $this->emit("deleteResult", [
                "status" => false,
                "message" => "Gagal menghapus data " . $this->name
            ]);
            return;
        }

        $data->delete();
        $this->emit("deleteResult", [
            "status" => true,
            "message" => "Data " . $this->name . " berhasil dihapus!"
        ]);
    }

    public function render()
    {
        $data = $this->get_pagination_data();

        return view($data['view'], $data);
    }
}
