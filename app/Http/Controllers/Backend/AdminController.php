<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Backend.index');
    }
    public function create()
    {
        return view('Backend.doctor.create');
    }

    public function patient_list()
    {
        return view('Backend.patient.list');
    }
}
