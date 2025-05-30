<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'long_description',
    ];

    function toggleCompleted()
    {
        $this->completed = !$this->completed;
        $this->save();
    }
}
