<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
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
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //

    /**
     * Get the entities owned by this user.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the entities owned by this user.
     */
    public function supportTickets()
    {
        return $this->hasMany(Post::class)->supportTickets();
    }

    /**
     * Get the entities owned by this user.
     */
    public function entities()
    {
        return $this->hasMany(Entity::class);
    }

    /**
     * Get the services owned by this user.
     */
    public function services()
    {
        return $this->hasMany(Entity::class)->services();
    }

    /**
     * Get the services owned by this user.
     */
    public function products()
    {
        return $this->hasMany(Entity::class)->products();
    }
}
