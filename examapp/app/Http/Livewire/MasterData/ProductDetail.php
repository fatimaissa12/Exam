<?php

namespace App\Http\Livewire\MasterData;

use Livewire\Component;
use App\Models\Prodect;
class ProductDetail extends Component
{

    public $search;
    public $modal = false;
    protected $queryString = ['search'];
    protected $listeners = [

        '$refresh',
    ];

    public function add()
    {
        // $this->validate();



       $this->modal = false;
    //    $this->resetInputFields();
    //    $this->alert('success', 'تمت الاضافة', [
    //     'position' => 'top-end',
    //     'timer' => 3000,
    //     'toast' => true,
    //     'padding' => '0.5rem',
    //     'timerProgressBar'=> true,


    // ]);
       $this->emitTo('master-data.product-detail' ,'$refresh');

    }

    public function openModalToCreat()
    {

        $this->modal = true;

    }
    public function render()
    {
        return view('livewire.master-data.product-detail', [
            'products' => Prodect::where('name', 'code', '%'.$this->search.'%')->get(),
        ]);
    }
}
