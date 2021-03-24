<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'class_id',
        'gender',
        'phone',
        'dateofbirth',
        'current_address',
        'permanent_address',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }


    public function classes() 
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }


}
