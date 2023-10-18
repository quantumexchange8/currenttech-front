<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $fillable = ['name', 'number', 'email', 'message', 'file'];

    // Define any additional model methods or relationships here if needed
}