<?php
namespace App\Controllers;

use App\Models\ApplicationModel;
use App\Models\JobModel;
use CodeIgniter\Controller;

class JobapplyController extends BaseController
{
    // Display job application form
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

    // Submit job application
    public function applyJob()
    {
        $validation = \Config\Services::validation();

        // Validation rules for the form
        $rules = [
            'job_id' => 'required|integer',
            'resume' => 'uploaded[resume]|max_size[resume,2048]|ext_in[resume,pdf,doc,docx]',
            'email' => 'required|valid_email',
            'name' => 'required|min_length[3]',
            'portfolio' => 'required|valid_url',
            'coverletter' => 'required|min_length[50]',
        ];

        // Validate input
        if (!$this->validate($rules)) {
            return $this->response->setJSON(['success' => false, 'errors' => $validation->getErrors()]);
        }

        // Handle file upload
        $resume = $this->request->getFile('resume');
        if ($resume->isValid() && !$resume->hasMoved()) {
            $resumePath = WRITEPATH . 'uploads/';

            // Check if the directory exists, and create it if not
            if (!is_dir($resumePath)) {
                mkdir($resumePath, 0777, true);  // Creates directory with correct permissions
            }
            
            $resume->move($resumePath);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Resume upload failed.']);
        }

        $user = session()->get('user'); // Assuming the user is logged in and stored in the session
        if (!$user || $user['user_type'] !== 'candidate') {
            return $this->response->setJSON(['success' => false, 'message' => 'Unauthorized access.']);
        }

        // Prepare data for saving
        $applicationData = [
            'job_id' => $this->request->getPost('job_id'),
            'candidate_id' => $user['id'], // Assuming the logged-in user's ID
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'portfolio' => $this->request->getPost('portfolio'),
            'resume' => $resume->getName(),
            'cover_letter' => $this->request->getPost('coverletter'),
            'applied_at' => date('Y-m-d H:i:s'),
        ];

        // Save the application to the database
        $applicationModel = new ApplicationModel();
        if ($applicationModel->save($applicationData)) {
            // Send an email notification
            if ($this->sendApplicationEmail($applicationData, WRITEPATH . 'uploads/' . $resume->getName())) {
                return $this->response->setJSON(['success' => true, 'message' => 'Application submitted and email sent.']);
            } else {
                return $this->response->setJSON(['success' => false, 'message' => 'Application submitted, but email failed.']);
            }
        }

        return $this->response->setJSON(['success' => false, 'message' => 'Failed to submit the application.']);
    }

    private function sendApplicationEmail($applicationData, $resumePath)
    {
        $email = \Config\Services::email();

        $email->setFrom('smtp@fableadtechnolabs.com', 'Job Portal');
        $email->setTo($applicationData['email']);
        $email->setSubject('Job Application Confirmation');
        $email->setMessage("
            <p>Dear {$applicationData['name']},</p>
            <p>Thank you for applying for the job (Job ID: {$applicationData['job_id']}). Below are the details of your application:</p>
            <ul>
                <li><strong>Portfolio:</strong> {$applicationData['portfolio']}</li>
                <li><strong>Cover Letter:</strong> {$applicationData['cover_letter']}</li>
            </ul>
            <p>We will review your application and get back to you shortly.</p>
            <p>Best Regards,<br>Job Portal Team</p>
        ");

        // Attach the resume
        $email->attach($resumePath);

        // Send email
        return $email->send();
    }
}
