<?php

namespace App\Http\Livewire\Country;

use App\Country;
use Livewire\Component;

class Edit extends Component
{

    public Country $country;

    public $name;
    public $currency;
    public $zip_code;
    public $tax;
    public $price_of_first_ten_kilo;
    public $price_for_kilo;
    public $profitRatio;
    public $country_code;
    public $updateMode = false;

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

    public function mount(Country $country)
    {
        $this->country = $country;

        $this->name['ar'] =  $country->getTranslation('name', 'ar');
        $this->name['en'] =  $country->getTranslation('name', 'en');

        $this->currency['ar'] =  $country->getTranslation('currency', 'ar');
        $this->currency['en'] =  $country->getTranslation('currency', 'en');

        $this->zip_code = $country->zip_code;

        $this->tax = $country->tax;

        $this->price_of_first_ten_kilo = $country->price_of_first_ten_kilo;

        $this->price_for_kilo = $country->price_for_kilo;

        $this->profitRatio = $country->profitRatio;

        $this->country_code = $country->country_code;
    }

    public function render()
    {
        return view('livewire.country.edit');
    }
}
