<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
     protected $table='tbl_measurement';


    protected $fillable=[
    	'height', 'weight', 'bust', 'waist', 'hips',
    ];
}
