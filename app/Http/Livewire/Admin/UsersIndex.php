<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\User;

class UsersIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function render()
    {

        $users=User::where('name','LIKE','%'.$this->search.'%')
                    ->orwhere('email','LIKE','%'.$this->search.'%')
                    ->paginate(8);
        return view('livewire.admin.users-index',compact('users'));
    }

    public function limpiar_page(){
        $this->resetPage();
    }
}
