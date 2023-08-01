<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerDetails extends Model
{
    use HasFactory;

    protected $fillable = ['playerId','name','hobbies','personal_traits','looking_for_in_partner','number_of_matches','current_long_lat','age'];
}
