<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'title',
    ];

    public function permissions()
    {
        return $this->hasMany(permissions::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
