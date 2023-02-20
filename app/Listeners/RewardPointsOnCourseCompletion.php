<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\CourseCompleted;
use App\Models\Point;

class RewardPointsOnCourseCompletion
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
    public function handle(CourseCompleted $event)
    {
        $points = Point::where('user_id', $event->user_id)->first();
        $points->increment('points', 100);
    }
}
