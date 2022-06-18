<?php

namespace App\Http\Livewire\Prodect;
use App\Models\Prodect;
use Livewire\Component;

class Show extends Component
{


    protected $listeners = [

        '$refresh',
    ]; 

    public function delete($id)
    {
        Prodect::findOrFail($id)->delete();
        $this->emitTo('prodect.show' ,'$refresh');

    }

    public function render()
    {
        $prodects = Prodect::get(['id','name','price','count']);
        return view('livewire.prodect.show',[
            'prodects' =>  $prodects
        ]);
    }
}
