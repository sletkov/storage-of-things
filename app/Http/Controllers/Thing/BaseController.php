<?php


namespace App\Http\Controllers\Thing;

use App\Http\Controllers\Controller;
use App\Services\Thing\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
