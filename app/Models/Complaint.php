<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;


    public function reporter() {
        return $this->belongsTo(Reporter::class);
    }

    
    public function complaintImages() {
        return $this->hasMany(ComplaintImage::class);
    }
}
