<?php

namespace App\Http\Livewire\MasterData;
use Livewire\Component;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Categorydata extends Component
{

    use LivewireAlert;
    public $name;
    public $modal = false;
    public $category_id;
    protected $listeners = [

        '$refresh',
    ];  


    protected $rules = [
        'name' => 'required',
    ];


    public function add()
    {
        $this->validate();

        Category::create([
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
       $this->emitTo('master-data.categorydata' ,'$refresh');

    }

    private function resetInputFields(){
        $this->name = '';
    }

    public function update()
    {
        $this->validate();
        Category::find($this->category_id)->update([
            'name' => $this->name,
          ]);
          $this->resetInputFields();
    }

    public function openModalToCreat()
    {
        $this->resetInputFields();
        $this->modal = true;
       
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        $this->emitTo('master-data.categorydata' ,'$refresh');

    }

    public function openModalToUpadte($id)
    {
       $this->category_id = $id;
       $this->modal = true;
       $this->loadeModel();
    }


    public function loadeModel()
    {
        $data = Category::find($this->category_id);
        $this->name = $data->name;
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