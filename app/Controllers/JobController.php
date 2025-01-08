<?php

namespace App\Controllers;

use App\Models\JobPostModel;
use App\Models\JobModel;
use App\Models\UserModel;
use App\Models\ApplicationModel;

class JobController extends BaseController
{
    public function index()
    {
        
        return view('jobs');
    }

    public function display()
    {
        $db = \Config\Database::connect();
    
        // Join the application, candidate, and job tables
        $query = $db->table('application')
        ->select('application.id as application_id, 
                  users.name as candidate_name, 
                  users.profile_image, 
                  jobpost.type as job_type, 
                  jobpost.location as job_location')
        ->join('users', 'application.candidate_id = users.id', 'left')
        ->join('jobpost', 'application.job_id = jobpost.id', 'left')
        ->where('users.user_type', 'candidate') 
        ->get();
    
        $applications = $query->getResultArray();
    
        return $this->response->setJSON([
            'status' => 'success',
            'applications' => $applications
        ]);
    }
    
}
