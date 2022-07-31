<?php

namespace App\Http\Livewire\MasterData;

use Livewire\Component;

use App\Models\Group_Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Gropproduct extends Component
{
    use LivewireAlert;
    public $name;
    public $modal = false;
    public $group_id;
    protected $listeners = [

        '$refresh',
    ]; 
    
    protected $rules = [
        'name' => 'required',
    ];
    
    public function add()
    {
        $this->validate();

        Group_Product::create([
          'name' => $this->name,
          
        ]);

       $this->modal = false;
       $this->resetInputFields();
       $this->alert('success', 'تمت الاضافة', [
        'position' => 'top-end',
        'timer' => 3000,
        'toast' => true,
        'padding' => '0.5rem',
        'timerProgressBar'=> true,
       
       
    ]);
       $this->emitTo('master-data.gropproduct' ,'$refresh');

    }
    public function openModalToCreat()
    {
        $this->resetInputFields();
        $this->modal = true;
       
    }

    private function resetInputFields(){
        $this->name = '';
    }

    public function update()
    {
        $this->validate();
        Group_Product::find($this->group_id)->update([
            'name' => $this->name,
          ]);
          $this->resetInputFields();
    }

    public function delete($id)
    {
        Group_Product::findOrFail($id)->delete();
        $this->emitTo('master-data.categorydata' ,'$refresh');

    }

    public function openModalToUpadte($id)
    {
       $this->group_id = $id;
       $this->modal = true;
       $this->loadeModel();
    }


    public function loadeModel()
    {
        $data = Group_Product::find($this->group_id);
        $this->name = $data->name;
    }

    public function render()
    {
        return view('livewire.master-data.gropproduct',[
            'groups' =>  Group_Product::paginate(4),
        ]);
    }
}
