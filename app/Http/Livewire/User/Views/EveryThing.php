<?php

namespace App\Http\Livewire\User\Views;

use App\Traits\User\GeneralArticleTrait;
use Exception;
use Illuminate\Support\Facades\Cache;
use jcobhams\NewsApi\NewsApi;
use Livewire\Component;

class EveryThing extends Component
{
    use GeneralArticleTrait;

    // Attributes
    public $topic;

    // getting the topic as a required parameter
    public function mount($topic = null)
    {
        $this->topic = $topic;
        if(! (Cache::has('all_'.$this->topic.'_articles')))
            $this->getAllTopicArticlesAndCache();
        $test = Cache::get('all_'.$this->topic.'_articles');
    }

// request all the topic articles and cache them for 120m
    public function getAllTopicArticlesAndCache()
    {
        try
        {
            $newsapi = new NewsApi(env('NEWS_API_KEY'));
            $all_articles = $newsapi->getEverything($q=$this->topic, $sources=null, $domains=null,
            $exclude_domains=null, $from=date('Y-M-D'), $to=null, $language=app()->getLocale(),
            $sort_by=null,  $page_size=40, $page=null);
            Cache::put('all_'.$this->topic.'_articles' , $all_articles  , 6200);
        }
        catch(Exception $e)
        {
            return dd($e->getMessage());
        }
    }
    public function render()
    {
        $all_articles = Cache::get('all_'.$this->topic.'_articles');
        return view('livewire.user.views.every-thing' , [
            'articles' => $all_articles->articles,
            'topic' => 'top_'.$this->topic.'_headlines',
            ])->extends('user.layouts.master')->section('content');
    }
}
