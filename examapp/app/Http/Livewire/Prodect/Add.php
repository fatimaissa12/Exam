<?php

namespace App\Http\Livewire\Prodect;

use Livewire\Component;
use App\Models\Prodect;

class Add extends Component
{
    public $name;
    public $dscription;
    public $price;
    public $count;

    public function add()
    {
        Prodect::create([

            'name' => $this->name,
            'price' => $this->price,
            'count' => $this->count,
            
        ]);   
  
        $this->emitTo('prodect.show' ,'$refresh');
    }
    public function render()
    {
        return view('livewire.prodect.add');
    }
}
