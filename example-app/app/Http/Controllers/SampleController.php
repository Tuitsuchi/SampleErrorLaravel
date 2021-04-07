<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SampleService;

class SampleController extends Controller
{
    protected SampleService $sample_service;

    public function __construct(SampleService $sample_service) {
        $this->sample_service = $sample_service;
    }

    public function getSample(Request $request): array 
    {
        return ['sample' => $this->sample_service->sample()];
    }
}
