<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relation with priorities
    public function priorities()
    {
        return $this->hasMany(Priority::class);
    }
}
