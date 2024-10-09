<?php

namespace App\Livewire;

use Livewire\Component;

class Init extends Component
{
    public string $search = '';

    public function render()
    {
        return view('livewire.init', [
            'users' => User::query()
                ->when($this->search, fn($query) => $query->where('name', 'like', '%{$this->search}%'))
                ->get()
        ]);
    }
}
