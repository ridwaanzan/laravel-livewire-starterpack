<?php

namespace App\Http\Livewire\Front\Auth;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $alamat;
    public $place_of_birth;
    public $date_of_birth;
    public $jenis_kelamin;
    public $password;
    public $password_validator;
    public $province = [];
    public $regency = [];
    public $kecamatan = array();
    public $village = [];

    protected $rules = [
            'province' => 'required|numeric',
            'regency' => 'required|numeric',
            'kecamatan' => 'required|numeric',
            'village' => 'required|numeric'
    ];

    public function simpan()
    {
        $this->validate();
    }

    public function updatedProvince($id)
    {
        $this->regency = Regency::where('province_id', $id)
                        ->orderBy('name', 'asc')
                        ->get();
    }

    public function updatedRegency($id)
    {
        $this->kecamatan = District::where('regency_id', $id)
                        ->orderBy('name', 'asc')
                        ->get();
    }

    public function updatedKecamatan($id)
    {
        $this->village = Village::where('district_id', $id)
                        ->orderBy('name', 'asc')
                        ->get();
    }

    public function render()
    {
        $this->province = Province::orderBy('name', 'asc')->get();
        return view('livewire.front.auth.register', get_defined_vars());
    }
}
