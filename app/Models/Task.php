<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relation with categories
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    // relation with priorities
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
}
