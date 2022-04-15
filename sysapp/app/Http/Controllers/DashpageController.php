<?php

namespace App\Http\Controllers;


use App\Models\Test;

class DashpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adminp');
    }


}
