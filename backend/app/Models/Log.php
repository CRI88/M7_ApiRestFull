<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'message', 'loggable_id', 'loggable_type'
    ];

    // Relación polimórfica
    public function loggable()
    {
        return $this->morphTo();
    }
}
