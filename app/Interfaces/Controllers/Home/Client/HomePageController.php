<?php

namespace App\Interfaces\Controllers\Home\Client;

use App\Domains\Home\Models\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomePageController extends Controller
{
    public function __invoke()
    {
        $homeData = Cache::rememberForever(HomePage::class, function () {
            return HomePage::get();
        });
        return response($homeData);
    }
}
