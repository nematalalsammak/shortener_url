<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;
    protected $fillable=[
        'url_text','code','user_id','count'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }

    public function scopeClicks(Builder $builder,$click)
    {
        $builder->where('count', '>' , $click);

    }


}
