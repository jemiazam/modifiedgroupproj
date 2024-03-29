<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $table = 'clubs';

    protected $fillable = [
        'name',
        'short_form',
        'rating',
        'email' ,
        'contact',
        'members',
        'upcoming_programs',
        'ongoing_programs',
        'club_description',
    ];

    public $primaryKey = 'id';
    public $timestamps = true;
}
