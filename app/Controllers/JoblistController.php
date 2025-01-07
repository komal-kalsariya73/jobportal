<?php

namespace App\Controllers;

use App\Models\JobModel;
use App\Models\ApplicationModel;

class JoblistController extends BaseController
{
    public function fetchJobs()
    {
        $jobModel = new JobModel();

        // Get all jobs from the database
        $jobs = $jobModel->findAll();

        // Return data as JSON
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $jobs
        ]);
    }

    public function index()
    {
        
        return view('job/job-list');
    }
    public function searchJobs()
{
    $sortOrder = $this->request->getVar('sort_order') ?: 'desc';
        $jobTitle = $this->request->getVar('job_title');
        $categories = $this->request->getVar('category');
        $address = $this->request->getVar('sb_user_address');
        $distance = $this->request->getVar('distance');

        
        $perPage = 2; 
        $page = (int)($this->request->getVar('page') ?? 1); 
        $offset = ($page - 1) * $perPage;

    
        $jobModel = new JobModel();

        $jobs = $jobModel->searchJobs($jobTitle, $categories, $address, $distance, $sortOrder, $perPage, $offset);

        
        $totalJobs = $jobModel->countJobs($jobTitle, $categories, $address, $distance);

        
        $pager = \Config\Services::pager();
        $paginationLinks = $pager->makeLinks($page, $perPage, $totalJobs);

        // Return response in JSON format
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $jobs,
            'pagination' => [
                'current_page' => $page,
                'total_pages' => ceil($totalJobs / $perPage), // Ensure to calculate the total number of pages correctly
                'total_jobs' => $totalJobs
            ]
        ]);
    }

    
    
  
    
    
  
}
