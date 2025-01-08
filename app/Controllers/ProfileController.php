<?php

namespace App\Controllers;

use App\Models\ApplicationModel;
use App\Models\JobModel;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function display()
    {
        // Fetch the ID from the query parameters, defaulting to 1 if not provided
        $id = $_GET['id'] ?? 1;
       
        return view('job/profile', ['id' => $id]);
    }

    public function profileApi($id)
    {
        // Get the job details based on the ID passed
        $userModel = new ApplicationModel();
        $job = $userModel->find($id); // Find job by ID
        
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
