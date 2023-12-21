<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    //$fillableを定義することでfillが可能なプロパティを指定する。
    protected $fillable = [
        'user_id',
        'cafe_id',
        'title',
        'body',
        'stars'
    ];
    
    public function cafe()
    {
        return $this->belongsTo(Cafe::class);
    }
}
