<?php

namespace App\Http\Controllers;

use App\PersonalInfo;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'firstName'     =>  'required',
            'lastName'      =>  'required',
            'gender'        =>  'required',
            'address'       =>  'required', 
            'birthdate'     =>  'required|date',
            'birthplace'    =>  'required',
            'email'         =>  'required|email',
            'citizenship'   =>  'required',
            'cellphoneNum'  =>  'required|number',
            'fatherName'    =>  'required',
            'fOccupation'   =>  'required',
            'motherName'    =>  'required',
            'mOccupation'   =>  'required',
            'hobbies'       =>  'required',
            'skills'        =>  'required',
        ));

        $personalInfo = new PersonalInfo;

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
        $personalInfo->hobbies = $request->hobbies;
        $personalInfo->skills = $request->skills;

        $personalInfo->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonalInfo  $personalInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalInfo $personalInfo)
    {
        //
    }
}
