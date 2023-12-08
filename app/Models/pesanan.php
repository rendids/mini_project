<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function penyedia()
    {
        return $this->belongsTo(Penyedia::class);
    }

    // Pesanan.php

    public function ratings()
    {
        return $this->hasMany(Ratting::class, 'pesanan_id');
    }
}
