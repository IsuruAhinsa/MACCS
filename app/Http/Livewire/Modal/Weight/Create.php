<?php

namespace App\Http\Livewire\Modal\Weight;

use App\Weight;
use Livewire\Component;

class Create extends Component
{
    public $child_id;

    protected $listeners = ['refreshCreateWeightParent' => '$refresh'];

    public function render()
    {
        return view('livewire.modal.weight.create', [
            'child_id' => $this->child_id,
            'records' => Weight::where('child_id', $this->child_id)->orderBy('id', 'DESC')->get(),
        ]);
    }
}
