<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'start_date', 'end_date', 'user_id'
    ];

    // Relación con el usuario (puede ser profesor, estudiante o administrador)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
