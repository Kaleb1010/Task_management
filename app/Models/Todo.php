<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Todo extends Model
{
    use HasFactory,Notifiable;

    protected $table="todo";
    protected $fillable = [
        'task_name',
        'assigned_by',
        'assigned_to',
        'task_status',
        'description'
    ];
}
