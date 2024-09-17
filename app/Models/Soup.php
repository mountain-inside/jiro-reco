<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soup extends Model
{
    use HasFactory;
    
    public function stores()   
    {
        return $this->hasMany(Store::class);  
    }
    
    public function users()   
    {
        return $this->hasMany(User::class);  
    }
    
}
