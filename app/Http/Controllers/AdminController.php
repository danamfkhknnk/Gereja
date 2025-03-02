<?php

namespace App\Http\Controllers;
use App\Models\Jemaat;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $jemaat = Jemaat::count();

        return view('Admin.Dashboard',compact('jemaat'));
    }
}