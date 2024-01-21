<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;
    protected $table = 'psikolog';
    protected $guarded = [];

    public function konseling()
    {
        return $this->hasMany(Konseling::class);
    }
}
