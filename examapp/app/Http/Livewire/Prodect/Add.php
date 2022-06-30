<?php

namespace App\Http\Livewire\Prodect;

use Livewire\Component;
use App\Models\Prodect;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $price;
    public $code;
   

    protected $rules = [
        'name' => 'required',
        'price'=> 'required',
        'code' => 'required',
    ];

    public function add()
    {
       
        if( $newimage = $this->image){
            $newimage = $this->image->store('public/avatars');
        }
        

        Prodect::create([
          'name' => $this->name,
          'image' => $newimage,
          'price' => $this->price,
          'code' => $this->code
        ]);

       $this->validate();
       $data = [
           'name' => $this->name,
           'price' => $this->price,
           'code' => $this->code,
       ];

        $this->resetInputFields();
        $this->emitTo('prodect.show' ,'$refresh');
    }

    private function resetInputFields(){
        $this-> name= '';
        $this-> image= '';
        $this-> code= '';
        $this-> price= '';
    }

    public function render()
    { 
        return view('livewire.prodect.add');
    }
}