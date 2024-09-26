<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'foods',
        'rating',
        'comment',
        'photo_id',
        'store_id',
        'user_id',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('store')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        
    }
    
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
}
