<?php

namespace App\Http\Livewire\Admin\Views\Seo;

use Livewire\Component;

class SeoPage extends Component
{
    public function render()
    {
        return view('livewire.admin.views.seo.seo-page')->extends('admin.layouts.master');
    }
}
