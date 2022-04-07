<?php

namespace App\Http\Livewire\Admin\Views\UserManagment;

use App\Models\Contact;
use Livewire\Component;

class ContactForms extends Component
{


    public function render()
    {
        $allForms = Contact::paginate(10);
        return view('livewire.admin.views.user-managment.contact-forms' , ['allForms' => $allForms])
        ->extends('admin.layouts.master')
                    ->section('content');
    }
}
