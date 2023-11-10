<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Department;
use App\Model\Faculty;
use App\Model\Member;
use App\Model\Offer;
use App\Model\Office;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['member'] = Member::count();
        $data['faculty'] = Faculty::where('status',1)->count();
        $data['department'] = Department::where('status',1)->count();
        $data['office'] = Office::where('status',1)->count();
        // dd($office);
        return view('backend.home', $data);
    }
}
