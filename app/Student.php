<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //class for students registration Number
    public function RegNum()
    {
        return $this->hasOne(RegNum::class);

    }
}
