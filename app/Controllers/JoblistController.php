<?php

namespace App\Controllers;

use App\Models\JobPostModel;
use App\Models\ApplicationModel;

class JoblistController extends BaseController
{
    public function index()
    {
        
        return view('job/job-list');
    }

  
}
