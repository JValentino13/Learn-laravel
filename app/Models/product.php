<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'product';

    protected $fillable = ['title', 'description', 'images', 'type'];
     public $timestamps = false;
}
