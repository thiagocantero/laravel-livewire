<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserPagination extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.user-pagination', [
            'users' => User::paginate(10),
        ]);
    }
}
