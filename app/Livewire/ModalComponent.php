<?php

namespace App\Livewire;

use App\Models\Veiculos;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ModalComponent extends Component
{

    #[Rule("required", message: 'Digite um nome')]

    public $name;

    #[Rule("required", message: 'Digite um chassi')]
    public $chassi;

    #[Rule("required", message: 'Digite uma placa')]
    public $placa;

    #[Rule("required", message: 'Digite o modelo do veiculo')]
    public $modelo;
    public $isOpen = 0;

    public function open()
    {
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }


    public function addVeic (){

        $this->validate();

        Veiculos::create([
            'name' => $this->name,
            'placa' => $this->placa,
            'modelo' => $this->modelo,
            'chassi' => $this->chassi,
        ]);

        $this->reset(['name', 'placa', 'modelo', 'chassi']);
    }

   
    public function render()
    {
        return view('livewire.modal-component');
    }

    
}
