<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    
    public function cafe()   
    {
        return $this->hasMany(Cafe::class);  
    }
    
    public function getByCafe(int $limit_count = 10)
    {
        return $this->cafe()->with('area')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}