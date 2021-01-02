<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Daily extends Model
{
    use HasFactory,Notifiable;
    protected $table="dailies";
    protected $fillable = [
        'username',
        'department',
        'company_name',
        'email',
        'contact_name',
        'job_description',
        'status',
        'comments'
  ];
}
