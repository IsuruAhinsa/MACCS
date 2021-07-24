<?php

namespace App\Http\Livewire\Modal\Weight;

use App\Weight;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $child_id;

    protected $listeners = ['refreshCreateWeightParent' => '$refresh'];

    public function render()
    {
        return view('livewire.modal.weight.create', [
            'child_id' => $this->child_id,
            'records' => DB::table('weights')
                ->orderBy('updated_at', 'asc')
                ->get()
                ->groupBy(function ($date) {
                    return Carbon::parse($date->updated_at)->format('Y');
                })
        ]);
    }
}
