<?php
// app/Models/JobModel.php
namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $table = 'jobpost';
    protected $primaryKey = 'id';
    protected $allowedFields = ['employer_id', 'title', 'description', 'location', 'category', 'salary', 'type','image'];
    protected $useTimestamps = true;

    public function searchJobs($jobTitle, $categories, $address, $distance, $sortOrder, $limit, $offset)
{
    $builder = $this->builder();

    // Apply filters
    if (!empty($jobTitle)) {
        $builder->like('title', $jobTitle);
    }

    if (!empty($categories)) {
        $builder->whereIn('category', $categories);
    }

    if (!empty($address)) {
        $builder->where('location', $address);
    }

    // Apply distance filter (if applicable)
    if (!empty($distance)) {
        // Add your distance filtering logic here
    }

    // Apply sorting
    $builder->orderBy('created_at', $sortOrder);

    // Add limit and offset for pagination
    $builder->limit($limit, $offset);

    return $builder->get()->getResult();
}

// Method to count total jobs for pagination
public function countJobs($jobTitle, $categories, $address, $distance)
{
    $builder = $this->builder();

    // Apply filters
    if (!empty($jobTitle)) {
        $builder->like('title', $jobTitle);
    }

    if (!empty($categories)) {
        $builder->whereIn('category', $categories);
    }

    if (!empty($address)) {
        $builder->where('location', $address);
    }

    // Apply distance filter (if applicable)
    if (!empty($distance)) {
        // Add your distance filtering logic here
    }

    return $builder->countAllResults(); // Returns the total count of filtered jobs
}

   
}

?>