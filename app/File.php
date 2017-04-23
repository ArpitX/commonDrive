<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function username(){
        return $this->belongsTo(User::class);
    }
}
