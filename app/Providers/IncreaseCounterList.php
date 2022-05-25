<?php

namespace App\Providers;

use App\Providers\IncreaseVideoList;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncreaseCounterList
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
     * @param  \App\Providers\IncreaseVideoList  $event
     * @return void
     */
    public function handle(IncreaseVideoList $event)
    {
        //
    }
}
