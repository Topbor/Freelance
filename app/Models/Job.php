<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'title', 'shortDesc', 'longDesc', 'language','price','user_id'
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
