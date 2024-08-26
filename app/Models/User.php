<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Hash;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function scopeSearch($query, $val)
    {
        return $query->where('name', 'like', '%'.$val.'%')
        ->orWhere('email', 'like', '%'.$val.'%')
        ->orWhere('status', 'like', '%'.$val.'%')
        ->orWhere('created_at', 'like', '%'.$val.'%');
    }
    public static function createUserAccount($name, $email,$status, $password)
    {
        return self::create([
            'name' => $name,
            'email' => $email,
            'status' => $status,
            'password' => Hash::make($password),
        ]);
    }
    public static function getUser($search, $sortBy, $sortDirection, $perPage){
          // Define a default column and direction in case $sortBy is empty.
          $sortBy = $sortBy ?: 'name';
          $sortDirection = $sortDirection ?: 'desc';
  
          return self::search($search)
          ->orderBy($sortBy, $sortDirection)
          ->paginate($perPage);
    }
}
