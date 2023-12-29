<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;
    
    public function area()   
    {
        return $this->belongsTo(Area::class);  
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('area')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function menus()
    {
        return $this->hasMany(Menu::class);  
    }
    
    public function getByMenu(int $limit_count = 10)
    {
        return $this->menus()->with('cafe')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function reviews()   
    {
        return $this->hasMany(Review::class);  
    }
    
    public function getByReview(int $limit_count = 10)
    {
        return $this->reviews()->with('cafe')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}
