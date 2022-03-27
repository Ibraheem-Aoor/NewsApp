<?php

namespace App\Http\Livewire\User\Views;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{

    // Attributes
    public $name , $email,
            $subject , $message;

    public function submitForm()
    {
        $this->validate($this->rules());
        ModelsContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        session()->flash('success' , 'We Will reach you soon');
    }

    public function rules()
    {
        return [
            'name' => 'string|nullable|max:255',
            'email' => 'string|nullable|email',
            'subject' => 'string|nullable|max:255',
            'message' => 'required|string',
        ];
    }
    public function render()
    {
        return view('livewire.user.views.contact')->extends('user.layouts.master')->section('content');
    }
}
