<?php

namespace App\Http\Livewire\User\Home;

use Exception;
use App\Traits\User\GeneralArticleTrait;
use Illuminate\Support\Facades\Cache;
use jcobhams\NewsApi\NewsApi;
use Livewire\Component;

class HomePage extends Component
{
    use GeneralArticleTrait;

    public function mount($id = null)
    {
        if(Cache::has('top_general_headlines'))
        {
            $this->render();
        }
        else
        {
            $this->cacheData();
        }
    }

// Get The data from api and cache it for 120min
    public function cacheData()
    {
        $lang = app()->getLocale() == 'en' ? 'us' : 'ae';
        try
        {
            $newsapi = new NewsApi(env('NEWS_API_KEY'));
            // category news
            $top_sport_headlines = $newsapi->getTopHeadlines(null, null, $lang ,'sports');
            $top_business_headlines = $newsapi->getTopHeadlines(null, null, $lang ,'business');
            $top_technology_headlines = $newsapi->getTopHeadlines(null, null, $lang ,'technology');
            $top_entertainment_headlines = $newsapi->getTopHeadlines(null, null, $lang ,'entertainment');
            $top_science_headlines = $newsapi->getTopHeadlines(null, null, $lang ,'science');
            $top_health_headlines = $newsapi->getTopHeadlines(null, null, $lang ,'health');
            $top_general_headlines = $newsapi->getTopHeadlines(null, null, $lang ,'general');
            $dataArray = [
                'top_sport_headlines' => $top_sport_headlines ,
                'top_business_headlines' => $top_business_headlines,
                'top_technology_headlines' => $top_technology_headlines,
                'top_entertainment_headlines' => $top_entertainment_headlines,
                'top_science_headlines' => $top_science_headlines,
                'top_health_headlines' => $top_health_headlines ,
                'top_general_headlines' => $top_general_headlines,
            ];
            foreach($dataArray as $key=>$value)
                Cache::put($key , $value , 6200);
            // $all_articles = $newsapi->getEverything($q="football,russia", $sources=null, $domains=null, $exclude_domains=null, $from=date('Y-M-D'), $to=date('Y-M-D'), $language='en', $sort_by=null,  $page_size=3, $page=null);
        }catch(Exception $e)
        {
            return $e->getMessage();
        }
    }//end method




    public function render()
    {
        return view('livewire.user.home-page')->extends('user.layouts.master')->section('content');
    }
}
