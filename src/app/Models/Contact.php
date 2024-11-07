<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
         protected $fillable = [
            'name',
            'gender',
            'email',
            'tel',
            'address',
            'Building_Name',
            'inquiry_type',
            'content'
         ];
}
