<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table='tbl_applicant';


    protected $fillable=[
    	'personalID', 'educationID', 'measurementID', 'headImgPath', 'fullImgPath',
    ];

    public function personalInfo(){
    	return $this->belongsTo('App\PersonalInfo','personalID', 'id');
    }

    
}
