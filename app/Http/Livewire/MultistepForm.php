<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
    
class MultistepForm extends Component
{
    use WithFileUploads;

    public $max_step = 4;
    public $current_step = 1;
    public $country_code = null;
    public $email = null;
    public $mobile = null;
    public $company = null;
    public $profile_pic = null;
    public $countries = [
        'af' => 'Afghanistan',
        'ax' => 'Aland Islands',
        'al' => 'Albania',
        'dz' => 'Algeria',
        'as' => 'American Samoa',
        'ad' => 'Andorra',
        'ao' => 'Angola',
        'ai' => 'Anguilla',
        'ag' => 'Antigua',
        'ar' => 'Argentina',
        'am' => 'Armenia',
        'aw' => 'Aruba',
        'au' => 'Australia'
    ];
    
    public function incrementStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->current_step++;
        if($this->current_step >= $this->max_step) {
            $this->current_step = $this->max_step;
        }
    }

    public function decrementStep()
    {
        $this->resetErrorBag();
        $this->current_step--;
        if($this->current_step <= 1) {
            $this->current_step = 1;
        }
    }

    public function mount(){
        $this->current_step = 1;
        $this->country_code = null;
    }

    // public function updated(){
    //     $this->dispatchBrowserEvent('upateEditor');
    //     $this->emit('upateEditor');
    // }

    public function render()
    {
        return view('livewire.multistep-form');
    }

    public function validateData(){
        // dd($request->all());
        if($this->current_step == 1){
            $this->validate([
                'email'=>'required|email',
                'country_code'=>'required',
                'mobile'=>'required|digits:10'
            ]);
        }
        elseif($this->current_step == 2){
              $this->validate([
                 'company'=>'required'
              ]);
        }
        elseif($this->current_step == 3){
              $this->validate([
                  'profile_pic'=>'required|mimes:jpeg,png|max:1024'
              ]);
        }
    }

    public function register(){
          $this->resetErrorBag();
          if($this->current_step == 4){
            $data['success'] = true;
            return redirect()->route('thank-you', $data);
          }
    }
}
