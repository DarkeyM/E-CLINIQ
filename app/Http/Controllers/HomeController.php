<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function studentHome()
    {
        return view('student.index');
    }

    public function facultyHome()
    {
        return view('faculty.index');
    }

    public function doctorHome()
    {
        return view('doctor.index');
    }

    public function dentistHome()
    {
        return view('dentist.index');
    }

    public function nurseHome()
    {
        return view('nurse.index');
    }

    public function adminHome()
    {
        return view('admin.index');
    }
}
