<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'score', 'submission_id'
    ];

    // Relación con la entrega
    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
