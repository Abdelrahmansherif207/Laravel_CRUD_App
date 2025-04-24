<?php

namespace App\Listeners;

use App\Events\PostAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AsignReviewerToPost
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostAdded $event): void
    {
        $user = $event->post->user;

        if ($user) {
            $user->increment('posts_count');
        }
    }
}
