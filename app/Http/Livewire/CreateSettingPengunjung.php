<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tbl_settingpengunjung;

class CreateSettingPengunjung extends Component
{
    public $tbl_settingpengunjung;
    public $settingpengunjungId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updateSetting") ? [
            'tbl_settingpengunjung.jumlahlantai1' => 'required',
            'tbl_settingpengunjung.jumlahlantai2' => 'required',
        ] : [
            'tbl_settingpengunjung.jumlahlantai1' => 'required',
            'tbl_settingpengunjung.jumlahlantai2' => 'required',
        ];

        return array_merge([
            'tbl_settingpengunjung.jumlahlantai1' => 'required',
            'tbl_settingpengunjung.jumlahlantai2' => 'required',
        ], $rules);
    }

    public function createSettingpengunjung()
    {
        $jumlahsetting = tbl_settingpengunjung::all()->count();

        if ($jumlahsetting < 1) {
            $this->resetErrorBag();
            $this->validate();

            tbl_settingpengunjung::create($this->tbl_settingpengunjung);

            $this->emit('saved');
            $this->reset('tbl_settingpengunjung');

            return redirect('settingpengunjung');
        }else {
            
        }
    }

    public function updateSettingpengunjung()
    {
        $this->resetErrorBag();
        $this->validate();

        tbl_settingpengunjung::query()
            ->where('id', $this->settingpengunjungId)
            ->update($this->tbl_settingpengunjung);

        $this->emit('saved');
        return redirect('settingpengunjung');
    }

    public function mount()
    {
        if (!!$this->settingpengunjungId) {
            $setting = tbl_settingpengunjung::find($this->settingpengunjungId);

            $this->tbl_settingpengunjung = [
                "jumlahlantai1" => $setting->jumlahlantai1,
                "jumlahlantai2" => $setting->jumlahlantai2,
            ];
        }

        $this->button = create_button($this->action, "Setting");
    }

    public function render()
    {
        return view('livewire.create-setting-pengunjung');
    }
}
