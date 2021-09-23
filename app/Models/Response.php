<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;


    public function admin() {
        return $this->belongsTo(Admin::class);
    }


    public function complaint() {
        return $this->belongsTo(Complaint::class);
    }
}
