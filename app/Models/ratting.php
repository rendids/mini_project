<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ratting extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Ratting.php

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function penyedia()
    {
        return $this->belongsTo(Penyedia::class, 'penyedia_id');
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }
}
