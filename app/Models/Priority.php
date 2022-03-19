<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relation with tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // relation with colors
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
