<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;
use Flux\Flux;

class CreateNote extends Component
{

    public $title;
    public $content;

    public function rules ()
    {
        return [
            'title' => 'required|string|max:255|unique:notes,title',
            'content' => 'required|string',
        ];
    }

    public function save()
    {
        $this->validate();
        
        Note::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset();

        Flux::modal('create-note')->close();

        session()->flash('success', 'Catatan Behasil di buat');

        $this->redirectRoute('notes', navigate: true);
    }


    


    public function render()
    {
        return view('livewire.create-note');
    }
}
