<?php

namespace App\Domains\Home\Observers;

use App\Domains\Home\Models\HomePage;

class HomePageObserver
{
    /**
     * Handle the HomePage "created" event.
     */
    public function created(HomePage $homePage): void
    {
        //
    }

    /**
     * Handle the HomePage "updated" event.
     */
    public function updated(HomePage $homePage): void
    {
        //
    }

    /**
     * Handle the HomePage "deleted" event.
     */
    public function deleted(HomePage $homePage): void
    {
        //
    }

    /**
     * Handle the HomePage "restored" event.
     */
    public function restored(HomePage $homePage): void
    {
        //
    }

    /**
     * Handle the HomePage "force deleted" event.
     */
    public function forceDeleted(HomePage $homePage): void
    {
        //
    }
}
