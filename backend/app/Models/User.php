<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens; // Importa el trait de Sanctum
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens; // Añade HasApiTokens

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Los atributos que deberían ser ocultos para la serialización.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Los atributos que deberían ser casteados.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relación con los roles.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    /**
     * Relación con asignaturas (profesor).
     * Un profesor puede tener muchas asignaturas.
     */
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'teacher_id');
    }

    /**
     * Relación con cursos a través de la tabla course_user.
     * Permite asignar estudiantes y profesores a cursos.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_user')->withPivot('role');
    }

    /**
     * Relación con entregas de tareas (submissions).
     */
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    /**
     * Relación con eventos del calendario (CalendarEvent).
     */
    public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class);
    }
}
