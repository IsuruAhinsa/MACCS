<?php

namespace App\Http\Livewire\Modal\Height;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $child_id;

    protected $listeners = ['refreshCreateHeightParent' => '$refresh'];

    public function render()
    {
        return view('livewire.modal.height.create', [
            'child_id' => $this->child_id,
            'records' => DB::table('heights')
                ->orderBy('updated_at', 'asc')
                ->get()
        ]);
    }
}
