<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Subbab;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bab extends Model
{
    use HasFactory;

    protected $primaryKey = 'bab_id';
    public $incrementing = false;
    protected $fillable = [
        'bab_id',
        'class_id', 
        'subject_id',
        'bab_name', 
        'description'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'class_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'subject_id');
    }
}
