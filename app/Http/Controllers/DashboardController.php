<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Route\web;
use App\Http\pages\products\index;
// use App\Http\controllers\DashboardController;

class DashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.dashboard');
    }


    


    // public function blades()
    // {
    //     return view('includes.index');
    // }

    // public function create()
    // {
    //     return view('migration.2021_09_08_055015_create_daffa_table');
    // }

}
