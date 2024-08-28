<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $primaryKey = 'subject_id';
    public $incrementing = false;
    
    public function babs()
    {
        return $this->hasMany(Bab::class, 'subject_id', 'subject_id');
    }
}
