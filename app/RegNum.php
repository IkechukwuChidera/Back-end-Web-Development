<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegNum extends Model
{
    //
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
