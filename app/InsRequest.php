<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsRequest extends Model
{
    //
    public $timestamps = false;
    public $table = 'insrequests';
    public $fillable = ['fname', 'lname', 'postalCode', 'phone', 'email', 'insurance'];
}
