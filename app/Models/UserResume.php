<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResume extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'contact_number',
        'email',
        'message',
        'pos_system',
        'chip',
        'web_app',
        'web_3',
        'ctrader_type',
        'career_type',
        'intern',
        'resume'
    ];
}
