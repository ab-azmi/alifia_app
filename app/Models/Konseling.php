<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    use HasFactory;
    protected $table = 'konseling';
    protected $guarded = [];

    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class, 'psikolog_id', 'id');
    }
}
