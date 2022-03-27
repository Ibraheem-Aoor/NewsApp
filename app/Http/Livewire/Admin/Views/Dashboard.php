<?php

namespace App\Http\Livewire\Admin\Views;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard')->extends('admin.layouts.master')->section('content');
    }
}
