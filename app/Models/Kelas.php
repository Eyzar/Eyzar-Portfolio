<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $fillable = ['class_name'];

    public function bab()
    {
        return $this->hasMany(Bab::class, 'class_id', 'id');
    }
}
