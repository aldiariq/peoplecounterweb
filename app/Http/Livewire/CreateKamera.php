<?php

namespace App\Http\Livewire;

use App\Models\tbl_kamera;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateKamera extends Component
{
    public $tbl_kameras;
    public $kameraId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updateKamera") ? [
            'tbl_kameras.nama_kamera' => 'required'
        ] : [
            'tbl_kameras.nama_kamera' => 'required|unique:tbl_kameras',
            'tbl_kameras.channel_kamera' => 'required',
            'tbl_kameras.status_reverse' => 'required',
            'tbl_kameras.lantai' => 'required',
            'tbl_kameras.jumlah_maksimum' => 'required',
            'tbl_kameras.presentasi' => 'required'

        ];

        return array_merge([
            'tbl_kameras.nama_kamera' => 'required|unique:tbl_kameras',
            'tbl_kameras.channel_kamera' => 'required',
            'tbl_kameras.status_reverse' => 'required',
            'tbl_kameras.lantai' => 'required',
            'tbl_kameras.jumlah_maksimum' => 'required',
            'tbl_kameras.presentasi' => 'required'
        ], $rules);
    }

    public function createKamera ()
    {
        $id = Auth::id();

        $this->resetErrorBag();
        $this->validate();

        $this->tbl_kameras['id_user'] = $id;

        tbl_kamera::create($this->tbl_kameras);

        $this->emit('saved');
        $this->reset('tbl_kameras');
    }

    public function updateKamera ()
    {
        $this->resetErrorBag();
        $this->validate();

        tbl_kamera::query()
            ->where('id', $this->kameraId)
            ->update($this->tbl_kameras);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!!$this->kameraId) {
            $kamera = tbl_kamera::find($this->kameraId);

            $this->tbl_kameras = [
                "nama_kamera" => $kamera->nama_kamera,
                "channel_kamera" => $kamera->channel_kamera,
                "status_reverse" => $kamera->status_reverse,
                "lantai" => $kamera->lantai,
                "jumlah_maksimum" => $kamera->jumlah_maksimum,
                "presentasi" => $kamera->presentasi
            ];
        }

        $this->button = create_button($this->action, "Kamera");
    }

    public function render()
    {
        return view('livewire.create-kamera');
    }
}
