<?php

namespace App\Livewire;

use App\Models\Veiculos;
use Livewire\Component;
use Livewire\WithPagination;

class CrudComponent extends Component
{

    use WithPagination;

  public $search = '';
  public $numberRows = 5;


  
    public function render()
    {
        $veiculos = Veiculos::all();

        $veiculos = Veiculos::where('placa', 'like', '%' . $this->search . '%')
        ->orWhere('name', 'like', '%' . $this->search . '%')
        ->paginate($this->numberRows);

        return view('livewire.crud-component', ['veiculos' => $veiculos]);
    }

    public function delete(Veiculos $veiculos){
      $veiculos->delete();
  }
  
}
