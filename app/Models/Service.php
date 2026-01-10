<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    public $id = "id";
    public $name = "serviceName";
    public $serviceCost="serviceCost";
    public $timestamps = true;
}
