<?php

namespace App\Controllers;

use App\Models\JobPostModel;
use App\Models\ApplicationModel;

class JobController extends BaseController
{
    public function index()
    {
        
        return view('jobs');
    }

  
}
