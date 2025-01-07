<?php
namespace App\Controllers;

use App\Models\ApplicationModel;
use App\Models\JobModel;
use CodeIgniter\Controller;

class JobapplyController extends BaseController
{
    // Function to display the job application form
    public function display()
    {
      
      
        $id = $_GET['id'] ?? 1;
       
        $jobModel = new JobModel();
        
       
        $job = $jobModel->find($id);

        if (!$job) {
           
            return redirect()->to('/jobs')->with('error', 'Job not found.');
        }

       
        return view('job/jobapply', ['job' => $job]);
    }

  
    public function applyJob()
    {
        // Validation rules for form fields
        $validation = \Config\Services::validation();
        $rules = [
            'job_id' => 'required|integer',
            'resume' => 'uploaded[resume]|max_size[resume,2048]|ext_in[resume,pdf,doc,docx]',
            'email' => 'required|valid_email',
            'name' => 'required|min_length[3]',
            'portfolio' => 'required|valid_url',
            'coverletter' => 'required|min_length[50]',
        ];
    
        // Check if validation passes
        if (!$this->validate($rules)) {
            return $this->response->setJSON(['success' => false, 'errors' => $validation->getErrors()]);
        }
    
        // Handle the file upload for the resume
        $resume = $this->request->getFile('resume');
        if ($resume->isValid() && !$resume->hasMoved()) {
            $resume->move(WRITEPATH . 'uploads');
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'File upload failed.']);
        }

        $user = session()->get('user');
        if (!$user || $user['user_type'] !== 'candidate') {
            // Ensure that only candidates can apply for jobs
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'You are not authorized to apply for jobs.',
            ]);
        }

        // Get the candidate ID from the session
        $candidate_id = $user['id'];  // This is the logged-in user's ID
        // Prepare the application data
        $data = [
            'job_id' => $this->request->getPost('job_id'), // Retrieve job_id from form
            'candidate_id' =>   $candidate_id, // Assume user is logged in; otherwise, use placeholder ID
            'email' => $this->request->getPost('email'),
            'link' => $this->request->getPost('portfolio'),
            'resume' => $resume->getName(),
            'message' => $this->request->getPost('coverletter'),
            'applied_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
        ];
    
        // Save the application data to the database
        $applicationModel = new ApplicationModel();
        if ($applicationModel->save($data)) {
            return $this->response->setJSON(['success' => true, 'message' => 'Job application submitted successfully.']);
        }
    
        return $this->response->setJSON(['success' => false, 'message' => 'Failed to submit application.']);
    }
}
?>