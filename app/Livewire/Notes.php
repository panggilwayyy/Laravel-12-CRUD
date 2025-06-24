<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Note;

class Notes extends Component
{
    use WithPagination;
    
    public function render()
    {
        $notes = Note::Orderby('created_at', 'desc')
            ->paginate(5);
        return view('livewire.notes', compact('notes'));
    }
}
