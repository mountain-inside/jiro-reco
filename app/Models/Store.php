<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    
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
    
    public function getByStore(int $limit_count = 5)
    {
        return $this->reviews()->with('store')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        
    }
    
    public function getPagiByLimit(int $limit_count = 10)
    {
        
        return $this->orderBy('id', 'ASC')->paginate($limit_count);
    }
}
