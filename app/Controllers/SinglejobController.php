<?php

namespace App\Controllers;

use App\Models\JobModel;

class SinglejobController extends BaseController
{
    public function display()
    {
        $id = $_GET['id'] ?? 1;
        return view('job/job-single',['id' => $id]);
    }

    public function singleApi($id)
    {
        log_message('debug', 'singleApi method called with ID: ' . $id); // Debugging log
        
        // Get the job details based on the ID passed
        $jobModel = new JobModel();
        $job = $jobModel->find($id); // Find job by ID
        
        if (!$job) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Job not found.'
            ])->setStatusCode(404);
        }
    
        return $this->response->setJSON([
            'status' => 'success',
            'job' => $job
        ]);
    }
}

