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
            // 'tbl_kameras.status_reverse' => 'required',
            'tbl_kameras.lantai' => 'required',
            'tbl_kameras.jumlah_maksimum' => 'required',
            'tbl_kameras.presentasi' => 'required',
            'tbl_kameras.x1' => 'required',
            'tbl_kameras.y1' => 'required',
            'tbl_kameras.x2' => 'required',
            'tbl_kameras.y2' => 'required',
            'tbl_kameras.x3' => 'required',
            'tbl_kameras.y3' => 'required',
            'tbl_kameras.x4' => 'required',
            'tbl_kameras.y4' => 'required',
        ];

        return array_merge([
            'tbl_kameras.nama_kamera' => 'required|unique:tbl_kameras',
            'tbl_kameras.channel_kamera' => 'required',
            // 'tbl_kameras.status_reverse' => 'required',
            'tbl_kameras.lantai' => 'required',
            'tbl_kameras.jumlah_maksimum' => 'required',
            'tbl_kameras.presentasi' => 'required',
            'tbl_kameras.x1' => 'required',
            'tbl_kameras.y1' => 'required',
            'tbl_kameras.x2' => 'required',
            'tbl_kameras.y2' => 'required',
            'tbl_kameras.x3' => 'required',
            'tbl_kameras.y3' => 'required',
            'tbl_kameras.x4' => 'required',
            'tbl_kameras.y4' => 'required',
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
                // "status_reverse" => $kamera->status_reverse,
                "lantai" => $kamera->lantai,
                "jumlah_maksimum" => $kamera->jumlah_maksimum,
                "presentasi" => $kamera->presentasi,
                "x1" => $kamera->x1,
                "y1" => $kamera->y1,
                "x2" => $kamera->x2,
                "y2" => $kamera->y2,
                "x3" => $kamera->x3,
                "y3" => $kamera->y3,
                "x4" => $kamera->x4,
                "y4" => $kamera->y4,
            ];
        }

        $this->button = create_button($this->action, "Kamera");
    }

    public function render()
    {
        return view('livewire.create-kamera');
    }
}
