<?php

namespace App\Http\Livewire;

use App\Models\tbl_pengaturangaris;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class CreatePengaturangaris extends Component
{

    public $tbl_pengaturangaris;
    public $pengaturangarisId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updatePengaturangaris") ? [
            'tbl_pengaturangaris.id_kamera' => 'required'
        ] : [
            'tbl_pengaturangaris.x1g1' => 'required',
            'tbl_pengaturangaris.y1g1' => 'required',
            'tbl_pengaturangaris.x2g1' => 'required',
            'tbl_pengaturangaris.y2g1' => 'required',
            'tbl_pengaturangaris.x1g2' => 'required',
            'tbl_pengaturangaris.y1g2' => 'required',
            'tbl_pengaturangaris.x2g2' => 'required',
            'tbl_pengaturangaris.y2g2' => 'required',
        ];

        return array_merge([
            'tbl_pengaturangaris.id_kamera' => 'required',
            'tbl_pengaturangaris.x1g1' => 'required',
            'tbl_pengaturangaris.y1g1' => 'required',
            'tbl_pengaturangaris.x2g1' => 'required',
            'tbl_pengaturangaris.y2g1' => 'required',
            'tbl_pengaturangaris.x1g2' => 'required',
            'tbl_pengaturangaris.y1g2' => 'required',
            'tbl_pengaturangaris.x2g2' => 'required',
            'tbl_pengaturangaris.y2g2' => 'required',
        ], $rules);
    }

    public function createPengaturangaris ()
    {
        $this->resetErrorBag();
        $this->validate();

        tbl_pengaturangaris::create($this->tbl_pengaturangaris);

        $this->emit('saved');
        $this->reset('tbl_pengaturangaris');
    }

    public function updatePengaturangaris ()
    {
        $this->resetErrorBag();
        $this->validate();

        tbl_pengaturangaris::query()
            ->where('id', $this->pengaturangarisId)
            ->update($this->tbl_pengaturangaris);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!!$this->pengaturangarisId) {
            $pengaturangaris = tbl_pengaturangaris::find($this->pengaturangarisId);

            $this->tbl_pengaturangaris = [
                "id_kamera" => $pengaturangaris->id_kamera,
                "x1g1" => $pengaturangaris->x1g1,
                "y1g1" => $pengaturangaris->y1g1,
                "x2g1" => $pengaturangaris->x2g1,
                "y2g1" => $pengaturangaris->y2g1,
                "x1g2" => $pengaturangaris->x1g2,
                "y1g2" => $pengaturangaris->y1g2,
                "x2g2" => $pengaturangaris->x2g2,
                "y2g2" => $pengaturangaris->y2g2
            ];
        }

        $this->button = create_button($this->action, "Pengaturan Garis");
    }

    public function render()
    {
        return view('livewire.create-pengaturangaris');
    }
}
