<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // public function index()
    // {
    //     $authors = Author::all();
    //     return view('index', ['authors' => $authors]);
    // }

    public function getIndex()
    {
        return view('index');
    }

    public function startAttendance()
    {

    }

    public function endAttendance()
    {

    }

    public function getAttendance()
    {
        return view('attendance');
    }

}
