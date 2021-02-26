<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name', 'last_name' , 'father_name' , 'id_card_number'
    ];
}