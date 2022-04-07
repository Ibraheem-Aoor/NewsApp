<?php

namespace App\Http\Livewire\Admin\Views\Profile;

use Livewire\Component;

class ChangePassword extends Component
{
    public function render()
    {
        return view('livewire.admin.views.profile.change-password')->extends('admin.layouts.master');
    }
}
