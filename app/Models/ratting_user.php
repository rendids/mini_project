<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ratting_user extends Model
{
    use HasFactory;
    // Model User
    public function rattings()
    {
        return $this->belongsToMany(Ratting::class);
    }

    // Model Ratting
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
