<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subbab extends Model
{
    use HasFactory;

    public function babs()
    {
        return $this->belongsTo(Bab::class, 'bab_id', 'bab_id');
    }
}
