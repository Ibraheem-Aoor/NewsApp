<?php

namespace App\Http\Livewire\User\Views;

use App\Traits\User\GeneralArticleTrait;
use Livewire\Component;

class ArticleDetails extends Component
{
    use GeneralArticleTrait;
    public function render()
    {
        return view('livewire.user.views.article-details')->extends('user.layouts.master')->section('content');
    }
}
