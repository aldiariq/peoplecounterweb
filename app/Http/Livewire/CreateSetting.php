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
            'tbl_settings.ip_dvr' => 'required|unique:tbl_settings'
        ] : [
            'tbl_settings.user_dvr' => 'required',
            'tbl_settings.pass_dvr' => 'required',
        ];

        return array_merge([
            'tbl_settings.ip_dvr' => 'required|unique:tbl_settings',
            'tbl_settings.user_dvr' => 'required',
            'tbl_settings.pass_dvr' => 'required'
        ], $rules);
    }

    public function createSetting ()
    {
        $id = Auth::id();

        $this->resetErrorBag();
        $this->validate();

        $this->tbl_settings['id_user'] = $id;

        tbl_setting::create($this->tbl_settings);

        $this->emit('saved');
        $this->reset('tbl_settings');
    }

    public function updateSetting ()
    {
        $this->resetErrorBag();
        $this->validate();

        tbl_setting::query()
            ->where('id', $this->settingId)
            ->update($this->tbl_settings);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!!$this->settingId) {
            $setting = tbl_setting::find($this->settingId);

            $this->tbl_settings = [
                "ip_dvr" => $setting->ip_dvr,
                "user_dvr" => $setting->user_dvr,
                "pass_dvr" => $setting->pass_dvr,
            ];
        }

        $this->button = create_button($this->action, "Setting");
    }

    public function render()
    {
        return view('livewire.create-setting');
    }
}
