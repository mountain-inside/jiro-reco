<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Soup;
use App\Models\Noodle;
use App\Models\Review;
use App\Models\Store;

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
        'soup_id',
        'noodle_id',
        'store_id',
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
        'password' => 'hashed',
    ];
    
    public function reviews()   
    {
        return $this->hasMany(Review::class);  
    }
    
    public function stamps()   
    {
        return $this->hasMany(Stamp::class);  
    }
    
    public function soup()
    {
        return $this->belongsTo(Soup::class);
    }
    
    public function noodle()
    {
        return $this->belongsTo(Noodle::class);
    }
    
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    
    
}
