<?php

namespace App\Listeners;

use App\Events\LangChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;

class LangchangeEventHandler
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\LangChanged  $event
     * @return void
     */
    public function handle(LangChanged $event)
    {
        return dd('Got it');
        Cache::flush();
        Cache::save();
    }
}
