<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;

class Search extends Component
{
    use WithPagination;

    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $users = User::where('name', 'like', $searchTerm)->paginate(10);
        return view('livewire.search', [
            'users' => $users,
        ]);
    }
}
