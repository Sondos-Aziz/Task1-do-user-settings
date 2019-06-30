<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'firstName', 'secondName','thirdName','fourthName','email', 'idNum','functionalNum','specialization',
        'socialStatus','gender','mobile','dateOfHiring','dateBirth','phone','address','image'
    ];

    public $timestamps = false;

}
