<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chatmessagelog extends Model
{
    use HasFactory;

    protected $fillable = ['message', 'reaction'];
}
