<?php

namespace App\Http\Livewire\Country;

use App\Country;
use Livewire\Component;

class Edit extends Component
{

    private Country $country;

    public $name;
    public $currency;
    public $zip_code;
    public $tax;
    public $price_of_first_ten_kilo;
    public $price_for_kilo;
    public $profitRatio;
    public $country_code;

    public function save()
    {
        $data = $this->validate([
            'name.ar' => 'required|string|min:3|max:255',
            'name.en' => 'required|string|min:3|max:255',
            'currency.ar' => 'required|string|min:3|max:255',
            'currency.en' => 'required|string|min:3|max:255',
            'zip_code' => 'required|string|min:3|max:255',
            'tax' => 'required|min:0',
            'price_of_first_ten_kilo' => 'required|min:0',
            'price_for_kilo' => 'required|min:0',
            'profitRatio' => 'required|min:0|max:100',
            'country_code' => 'required|min:0|max:100',
        ]);

        $this->country->update($data);

        toastr()->success('updated created!');

        return redirect()->route('countries.show', $this->country);
    }

    public function mount(Country $country){
        $this->country = $country;
    }

    public function render()
    {
        return view('livewire.country.edit');
    }
}
