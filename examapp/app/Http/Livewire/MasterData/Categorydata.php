<?php

namespace App\Http\Livewire\MasterData;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Category;

class Categorydata extends Component
{
    use LivewireAlert;
    public $name;
    public $modal = false;

    protected $listeners = [

        '$refresh',
    ];  

    protected $rules = [
        'name' => 'required',
    ];

    public function add()
    {
        Category::create([
          'name' => $this->name,
        ]);

       $this->validate();
       $data = [
           'name' => $this->name,
       ];

      
       $this->resetInputFields();
       $this->emitTo('master-data.categorydata' ,'$refresh');
    }

    private function resetInputFields(){
        $this-> name= '';
    }
    
    public function openModalToCreat()
    {
        $this->resetInputFields();
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
        $this->emitTo('master-data.categorydata' ,'$refresh');
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        $this->emitTo('master-data.categorydata' ,'$refresh');

    }

    public function paginationView()
    {
        return 'vendor.livewire.tailwind';

    }
   

    public function render()
    {
        return view('livewire.master-data.categorydata',[
            'categores' =>  Category::paginate(4),
        ]);
    }
}
