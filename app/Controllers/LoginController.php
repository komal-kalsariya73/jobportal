<?php

namespace App\Controllers;

use App\Models\JobPostModel;
use App\Models\ApplicationModel;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class LoginController extends ResourceController
{
    protected $modelName = 'App\Models\UserModel';
    protected $format = 'json';
    
    public function index()
    {
        
        return view('job/login');
    }
    public function signup()
    {
        
        return view('job/signup');
    }

    public function getUsers()
    {
        return $this->respond($this->model->findAll());
    }

    
    public function getUser($id = null)
    {
        $user = $this->model->find($id);
        if ($user) {
            return $this->respond($user);
        }
        return $this->failNotFound('User not found.');
    }

    
    public function createUser()
    {
        try {
            $validation = \Config\Services::validation();
    
            // Validation Rules
            $rules = [
                'name'          => 'required|min_length[3]',
                'email'         => 'required|valid_email|is_unique[users.email]',
                'password'      => 'required|min_length[6]',
                'contact'       => 'required|numeric|min_length[10]',
                'profile_image' => 'uploaded[profile_image]|max_size[profile_image,2048]|is_image[profile_image]',
                'gender'        => 'required',
    'user_type'     => 'required',
            ];
    
            // Custom Messages
            $messages = [
                'email' => [
                    'is_unique' => 'The email address is already registered.',
                ],
                'profile_image' => [
                    'uploaded' => 'Please upload a profile image.',
                    'max_size' => 'The profile image must not exceed 2MB.',
                    'is_image' => 'The uploaded file must be an image.',
                ],
            ];
    
            // Validate Request
            if (!$this->validate($rules, $messages)) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'errors' => $validation->getErrors(),
                ]);
            }
    
            // Get form data
            $data = $this->request->getPost();
            $profileImage = $this->request->getFile('profile_image');
    
            // Handle profile image upload
            if ($profileImage && $profileImage->isValid()) {
                $newName = $profileImage->getRandomName();
                $profileImage->move(WRITEPATH . 'uploads', $newName);
                $data['profile_image'] = $newName;
            }
    
            // Hash the password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    
            // Save user data
            if ($this->model->insert($data)) {
                return $this->response->setJSON([
                    'status'  => 'success',
                    'message' => 'User created successfully.',
                ]);
            }
    
            // Handle model errors
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $this->model->errors(),
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'An unexpected error occurred. Please try again.',
            ]);
        }
    }
    
    
    public function updateUser($id = null)
    {
        $data = $this->request->getRawInput();
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        if ($this->model->update($id, $data)) {
            return $this->respondUpdated(['message' => 'User updated successfully.']);
        }
        return $this->failValidationErrors($this->model->errors());
    }

    
    public function deleteUser($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['message' => 'User deleted successfully.']);
        }
        return $this->failNotFound('User not found.');
    }
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();
    
        if ($user && password_verify($password, $user['password'])) {
            session()->set('user', $user);
            return $this->respond(['message' => 'Login successful', 'user' => $user]);
        }
    
        return $this->fail('Invalid email or password.');
    }
    
    
    public function logoutUser()
    {
        session()->destroy();
        return $this->respond(['message' => 'Logout successful.']);
    }
}
