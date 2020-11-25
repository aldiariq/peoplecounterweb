<?php

namespace App\Http\Livewire;

use App\Models\tbl_setting;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateSetting extends Component
{
    public $tbl_settings;
    public $settingId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updateSetting") ? [
            'tbl_settings.max_lantai1' => 'required',
            'tbl_settings.max_lantai2' => 'required',
        ] : [
            'tbl_settings.max_lantai1' => 'required',
            'tbl_settings.max_lantai2' => 'required',
        ];

        return array_merge([
            'tbl_settings.max_lantai1' => 'required',
            'tbl_settings.max_lantai2' => 'required',
        ], $rules);
    }

    public function createSetting()
    {
        $jumlahsetting = tbl_setting::all()->count();

        if ($jumlahsetting < 1) {
            $id = Auth::id();

            $this->resetErrorBag();
            $this->validate();

            $this->tbl_settings['id_user'] = $id;

            tbl_setting::create($this->tbl_settings);

            $this->emit('saved');
            $this->reset('tbl_settings');

            return redirect('setting');
        }else {
            
        }
    }

    public function updateSetting()
    {
        $this->resetErrorBag();
        $this->validate();

        tbl_setting::query()
            ->where('id', $this->settingId)
            ->update($this->tbl_settings);

        $this->emit('saved');
    }

    public function mount()
    {
        if (!!$this->settingId) {
            $setting = tbl_setting::find($this->settingId);

            $this->tbl_settings = [
                "max_lantai1" => $setting->max_lantai1,
                "max_lantai2" => $setting->max_lantai2,
            ];
        }

        $this->button = create_button($this->action, "Setting");
    }

    public function render()
    {
        return view('livewire.create-setting');
    }
}
