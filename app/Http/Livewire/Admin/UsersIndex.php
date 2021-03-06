<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\withPagination;

class UsersIndex extends Component
{
    
    public function render()

    {
        $users = User::paginate();

        return view('livewire.admin.users-index', compact('users'));
    }
}
  