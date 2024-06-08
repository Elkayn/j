<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Services\Promo\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service=$service;
    }
}
