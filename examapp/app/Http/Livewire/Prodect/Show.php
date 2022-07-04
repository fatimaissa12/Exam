<?php

namespace App\Http\Livewire\Prodect;
use App\Models\Prodect;
use Livewire\WithPagination;
use Livewire\Component;


class Show extends Component
{
 
    use WithPagination;
     
    protected $listeners = [

        '$refresh',
    ]; 

    public function delete($id)
    {
        Prodect::findOrFail($id)->delete();
        $this->emitTo('prodect.show' ,'$refresh');

    }
  
    public function paginationView()
    {
        return 'vendor.livewire.tailwind';

    }


    public function render()
    {
        
        return view('livewire.prodect.show',[
            'prodects' =>  Prodect::paginate(4),
        ]);
    }
}
