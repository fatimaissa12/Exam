<?php

namespace App\Http\Livewire\Prodect;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Prodect;
class Update extends Component
{

    use WithFileUploads;
    public $name;
    public $image;
    public $price;
    public $code;
    public $prodect_id;

    
   

    public function mount($prodect_id)
    {

        $this->$prodect_id = $prodect_id;
    if ($prodect_id) {

        $prodect = Prodect::findOrFail($this->prodect_id);
        $this->name = $prodect->name;
        $this->image = $prodect->image;
        $this->code = $prodect->code;
        $this->price = $prodect->price;

    }
    }

    public function update()
    {
        
       
        $prodect = Prodect::findOrFail($this->prodect_id);
        $prodect->edit([
            'name'=>$this->name,
            'image'=>$this->image,
            'code'=>$this->code,
            'price'=>$this->price,

        ]);
    }
    public function render()
    {
        return view('livewire.prodect.update');
    }
}
