<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table='tbl_personalinfo';


    protected $fillable = [
        'id', 'firstName', 'middleName', 'lastName', 'gender', 'address','birthdate' ,'birthplace' ,'email' ,'citizenship' ,'telephoneNum', 'cellphoneNum', 'fatherName', 'fOccupation', 'motherName', 'mOccupation', 'hobbies', 'skills', 'status',
    ];

    public function applicant(){
    	return $this->hasOne('App\Applicant', 'personalID', 'id');
    }
}
