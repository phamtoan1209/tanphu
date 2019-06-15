<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Information;
use App\Model\Slide;

class BaseController extends Controller
{
    public function __construct()
    {
        view()->share('slides',Slide::getSlideHome());
        view()->share('website',Information::getInfor());
    }
}
