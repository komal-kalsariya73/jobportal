<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplicationModel extends Model
{
    protected $table = 'application';  
    protected $primaryKey = 'id';  
    protected $allowedFields = ['job_id', 'candidate_id', 'email', 'link', 'resume', 'message', 'applied_at','name'];

 
    protected $returnType = 'array';
}
