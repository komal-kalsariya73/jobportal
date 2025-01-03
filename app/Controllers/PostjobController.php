<?php

namespace App\Controllers;

use App\Models\JobModel;
use App\Models\ApplicationModel;

class PostjobController extends BaseController
{
    public function index()
    {
        $user = session()->get('user');
        if (!$user || $user['user_type'] !== 'employer') {
            return redirect()->to('/job/login');
        }

        return view('job/post-job');
    }



   public function store()
    {
        $user = session()->get('user');
        if (!$user || $user['user_type'] !== 'employer') {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'You are not authorized to post jobs.',
            ]);
        }

        // Validation rules
        $validation = \Config\Services::validation();
        $rules = [
            'title'       => 'required|max_length[255]',
            'description' => 'required',
            'location'    => 'required|max_length[255]',
            'category'    => 'required|max_length[255]',
            'salary'      => 'required|numeric',
            'type'        => 'required|max_length[255]',
            'image'       => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]',
        ];

        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $validation->getErrors(),
            ]);
        }

        
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $uploadsFolder = FCPATH . 'uploads/'; 
            if (!is_dir($uploadsFolder)) {
                mkdir($uploadsFolder, 0777, true); 
            }

            $imageName = $image->getRandomName(); 
            $image->move($uploadsFolder, $imageName); // Move the file to the uploads folder
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to upload the image. Please try again.',
            ]);
        }

        // Saving the job data
        $jobModel = new JobModel();
        $jobData = [
            'employer_id' => $user['id'],
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'location'    => $this->request->getPost('location'),
            'category'    => $this->request->getPost('category'),
            'salary'      => $this->request->getPost('salary'),
            'type'        => $this->request->getPost('type'),
            'image'       => $imageName,
        ];

        $jobModel->save($jobData);

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Job posted successfully.',
        ]);
    }
    public function fetchJobs()
{
    $jobModel = new JobModel();
    $jobs = $jobModel->findAll();

    return $this->response->setJSON([
        'status' => 'success',
        'data' => $jobs
    ]);
}

public function joblist()
{
    // Load the job model
    $jobModel = new JobModel();

    // Get all jobs from the database
    $jobs = $jobModel->findAll();
    var_dump($jobs);
    // Pass jobs data to the view
    return view('job/job-list', ['jobs' => $jobs]);
}
}

  

