<?php
namespace App\Listeners;


use App\Events\IncreaseVideoEvents;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncreaseCounterListeners
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
     * @param  object  $event
     * @return void
     */
    public function handle(IncreaseVideoEvents $event)
    {
     return $this->UpdateViewer($event->video);
    }

    public function UpdateViewer($video)
    {
        $video->viewers=$video->viewers+1;
        $video->save();
    }
}
