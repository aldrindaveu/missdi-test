<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\PersonalInfo;
use App\Measurement;
use App\Education;
use Illuminate\Http\Request;
use Image;

class FormSubmit extends Controller
{
    //
    public function store(Request $request)
    {
       /* $this->validate($request, array(
            'firstName'     =>  'required',
            'lastName'      =>  'required',
            'gender'        =>  'required',
            'address'       =>  'required', 
            'birthdate'     =>  'required',
            'birthplace'    =>  'required',
            'email'         =>  'required',
            'citizenship'   =>  'required',
            'cellphoneNum'  =>  'required',
            'fatherName'    =>  'required',
            'fOccupation'   =>  'required',
            'motherName'    =>  'required',
            'mOccupation'   =>  'required',
            'hobbies'       =>  'required',
            'skills'        =>  'required',
            'elemSchool'    =>  'required',
            'highSchool'    =>  'required',
            'college'       =>  'required',
            'degree'        =>  'required',
            'height'        =>  'required',
            'weight'        =>  'required',
            'bust'          =>  'required',
            'waist'         =>  'required',
            'hips'          =>  'required',
            'headImgPath'   =>  'required',
            'bodyImgPath'   =>  'required',

        ));*/

        $personalInfo = new PersonalInfo;
        $education = new Education;
        $measurement = new Measurement;
        $applicant  = new Applicant;

        $personalInfo->firstName = $request->firstName;
        $personalInfo->middleName = $request->middleName;
        $personalInfo->lastName = $request->lastName;
        $personalInfo->gender = $request->gender;
        $personalInfo->address = $request->address;
        $personalInfo->birthdate = $request->birthdate;
        $personalInfo->birthplace = $request->birthplace;
        $personalInfo->email = $request->email;
        $personalInfo->citizenship = $request->citizenship;
        $personalInfo->telephoneNum = $request->telephoneNum;
        $personalInfo->cellphoneNum = $request->cellphoneNum;
        $personalInfo->fatherName = $request->fatherName;
        $personalInfo->fOccupation = $request->fOccupation;
        $personalInfo->motherName = $request->motherName;
        $personalInfo->mOccupation = $request->mOccupation;
        $personalInfo->skills = $request->skills;


        $personalInfo->save();
        
        $education->elemSchool = $request->elemSchool;
        $education->highSchool = $request->highSchool;
        $education->college = $request->college;
        $education->degree = $request->degree;

        
        $education->save();

        $measurement->height    =   $request->height;
        $measurement->weight    =   $request->weight;
        $measurement->bust      =   $request->bust;
        $measurement->waist     =   $request->waist;
        $measurement->hips      =   $request->hips;
        
        $measurement->save();

        
        $applicant->personalID		=	$personalInfo->id;
        $applicant->educationID		=	$education->id;
        $applicant->measurementID	=	$measurement->id;

        $headImgPath = time().'20.'.$request->headImgPath->getClientOriginalExtension();
        $request->headImgPath->move(public_path('/images'), $headImgPath);
        $destination_path = '/images/'. $headImgPath;
        $applicant->headImgPath     =   $destination_path;

        $fullImgPath = time().'03.'.$request->fullImgPath->getClientOriginalExtension();
        $request->fullImgPath->move(public_path('/images'), $fullImgPath);
        $fullBody_path = '/images/' . $fullImgPath;
        $applicant->fullImgPath     =   $fullBody_path;

        $applicant->save();


        return view('pages.welcome');
        //return view('');
    }

    //
    public function addTalent(Request $request)
    {
       /* $this->validate($request, array(
            'firstName'     =>  'required',
            'lastName'      =>  'required',
            'gender'        =>  'required',
            'address'       =>  'required', 
            'birthdate'     =>  'required',
            'birthplace'    =>  'required',
            'email'         =>  'required',
            'citizenship'   =>  'required',
            'cellphoneNum'  =>  'required',
            'fatherName'    =>  'required',
            'fOccupation'   =>  'required',
            'motherName'    =>  'required',
            'mOccupation'   =>  'required',
            'hobbies'       =>  'required',
            'skills'        =>  'required',
            'elemSchool'    =>  'required',
            'highSchool'    =>  'required',
            'college'       =>  'required',
            'degree'        =>  'required',
            'height'        =>  'required',
            'weight'        =>  'required',
            'bust'          =>  'required',
            'waist'         =>  'required',
            'hips'          =>  'required',
            'headImgPath'   =>  'required',
            'bodyImgPath'   =>  'required',

        ));*/

        $personalInfo = new PersonalInfo;
        $education = new Education;
        $measurement = new Measurement;
        $applicant  = new Applicant;

        $personalInfo->firstName = $request->firstName;
        $personalInfo->middleName = $request->middleName;
        $personalInfo->lastName = $request->lastName;
        $personalInfo->gender = $request->gender;
        $personalInfo->address = $request->address;
        $personalInfo->birthdate = $request->birthdate;
        $personalInfo->birthplace = $request->birthplace;
        $personalInfo->email = $request->email;
        $personalInfo->citizenship = $request->citizenship;
        $personalInfo->telephoneNum = $request->telephoneNum;
        $personalInfo->cellphoneNum = $request->cellphoneNum;
        $personalInfo->fatherName = $request->fatherName;
        $personalInfo->fOccupation = $request->fOccupation;
        $personalInfo->motherName = $request->motherName;
        $personalInfo->mOccupation = $request->mOccupation;
        $personalInfo->skills = $request->skills;


        $personalInfo->save();
        
        $education->elemSchool = $request->elemSchool;
        $education->highSchool = $request->highSchool;
        $education->college = $request->college;
        $education->degree = $request->degree;

        
        $education->save();

        $measurement->height    =   $request->height;
        $measurement->weight    =   $request->weight;
        $measurement->bust      =   $request->bust;
        $measurement->waist     =   $request->waist;
        $measurement->hips      =   $request->hips;
        
        $measurement->save();

        
        $applicant->personalID      =   $personalInfo->id;
        $applicant->educationID     =   $education->id;
        $applicant->measurementID   =   $measurement->id;

        $headImgPath = time().'20.'.$request->headImgPath->getClientOriginalExtension();
        $request->headImgPath->move(public_path('/images'), $headImgPath);
        $destination_path = '/images/'. $headImgPath;
        $applicant->headImgPath     =   $destination_path;

        $fullImgPath = time().'03.'.$request->fullImgPath->getClientOriginalExtension();
        $request->fullImgPath->move(public_path('/images'), $fullImgPath);
        $fullBody_path = '/images/' . $fullImgPath;
        $applicant->fullImgPath     =   $fullBody_path;

        $applicant->save();


        return view('pages.adminSide.dashboard');
        //return view('');
    }
}
