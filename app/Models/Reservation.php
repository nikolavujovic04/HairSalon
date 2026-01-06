<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = "reservation";
    public $primariKey = "id";
    public $date = "date";

    public $timestamps = true;
    public function person(){
        return $this->hasMany(Person::class);
    }

    public function worker(){
        return $this->hasMany(Worker::class);
    }

}
