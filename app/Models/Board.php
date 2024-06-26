<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    protected $table = 'boards';
    protected $fillable = [
        'title',
        'description',
        'progress',
        'date',
        'tag',
        'task_person',
        'piece_id'
    ];
}
