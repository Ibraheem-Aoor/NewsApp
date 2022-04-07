<?php

namespace App\Http\Livewire\Admin\Views\Profile;

use Livewire\Component;

class AdminProfile extends Component
{
    public $name , $email;

    public function updated($fields)
    {
        $this->validateOnly($fields , $this->rules());
    }

    public function saveProfile()
    {
        $this->validate($this->rules());
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|unique:users',
        ];
    }
    public function render()
    {
        return view('livewire.admin.views.profile.admin-profile')->extends('admin.layouts.master');
    }
}
