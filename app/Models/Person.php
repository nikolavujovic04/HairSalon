<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "person";
    public $primariKey = "id";
    public $name = "name";
    public $email = "email";
    public $phone = "phoneNumber";
    public $timestamps = true;

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
