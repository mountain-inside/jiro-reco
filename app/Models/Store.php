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
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
