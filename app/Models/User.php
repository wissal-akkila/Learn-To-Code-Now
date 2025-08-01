<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Course;

/**
 * @method \Illuminate\Database\Eloquent\Relations\BelongsToMany courses()
 */


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
protected $fillable = [
    'name',
    'email',
    'phone',
    'profile_image',
    'password',
    'role',
];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
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
public function courses()
{
    return $this->belongsToMany(Course::class, 'course_user');
}
public function completedCourses()
{
    return $this->belongsToMany(Course::class, 'completed_courses')
                ->withTimestamps()
                ->withPivot('completed_at');
}

public function courseResults()
{
    return $this->hasMany(CourseResult::class);
}

}