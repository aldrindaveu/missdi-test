<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function _construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $applicants = Applicant::all();
        return view('pages.adminSide.pendingApplication')->withApplicants($applicants);
    }

    public function dashboardInit()
    {
        $count = Applicant::count();
        return view('pages.adminSide.dashboard')->withCount($count);
    }

    public function indexeu()
    {
        $applicants = Applicant::all();
        return view('pages.adminSide.talentMaintenance')->withApplicants($applicants);
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
            'headImgPath'   =>  'required',
            'bodyImgPath'   =>  'required',
        ));

        $applicant  = new Applicant;

        $applicant->headImgPath     =   $request->headImgPath;
        $applicant->bodyImgPath     =   $request->bodyImgPath; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
