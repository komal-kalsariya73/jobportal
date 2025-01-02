<?php

namespace App\Controllers;

use App\Models\JobPostModel;
use App\Models\ApplicationModel;

class PostjobController extends BaseController
{
    public function index()
    {
        
        return view('job/post-job');
    }

  
}
