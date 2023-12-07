<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ratting extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function ratinguser(){
        return $this->belongsToMany(User::class);
    }

    public function provider()
    {
        return $this->belongsTo(penyedia::class);
    }

}
