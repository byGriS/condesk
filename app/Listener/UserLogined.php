<?php

namespace App\Listener;

use App\Events\onUserLogined;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Str;

class UserLogined
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
   * @param  onUserLogined  $event
   * @return void
   */
  public function handle(onUserLogined $event)
  {
    $event->user->api_token = Str::random(60);
    $event->user->save();
  }
}
