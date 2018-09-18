<?php

namespace App\Listeners\TEST;

use App\Events\TEST\test;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class First
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
     * @param  test  $event
     * @return void
     */
    public function handle(test $event)
    {
        var_dump('First Test');
    }
}
