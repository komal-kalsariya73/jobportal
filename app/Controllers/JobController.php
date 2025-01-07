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

    public function dispaly()
    {
        $jobModel = new JobModel();
        $candidateModel = new UserModel();

        // Fetch all jobs and candidates from the database
        $jobs = $jobModel->findAll();  // Get all jobs
        $candidates = $candidateModel->where('user_type', 'candidate')->findAll();

        // Respond with JSON
        return $this->response->setJSON([
            'status' => 'success',
            'jobs' => $jobs,
            'candidates' => $candidates
        ]);
    }
}
