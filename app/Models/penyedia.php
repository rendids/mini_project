<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyedia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Penyedia.php

    public function ratings()
    {
        return $this->hasMany(Ratting::class, 'penyedia_id');
    }

    public function pesanan()
    {
        return $this->hasMany(pesanan::class, );
    }
}
