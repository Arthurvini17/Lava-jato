<?php

namespace App\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{

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

    public function render()
    {
        return view('livewire.modal-component');
    }
}
