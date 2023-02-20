<?php

namespace App\Listeners;

use App\Events\CourseCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\CourseCompleted as CompletedCourse;

class MarkCourseAsCompleted
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
        CompletedCourse::create([
            'user_id' => $event->user_id,
            'course_id' => $event->course_id,
        ]);
    }
}
