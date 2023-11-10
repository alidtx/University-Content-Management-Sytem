<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\OfficeHome;
use App\Model\Member;
use App\Model\Office;
use App\Model\Faculty;
use App\Model\Department;
use App\Model\OfficeToMember;
use App\Model\Hall;
//use App\Model\OfficeToMember;
use App\Model\DepartmentToFacultyMember;
use App\Model\HallMember;

class OfficeFrontController extends Controller
{


    public function allOfficeAbout($id)
    {

        $ids = Office::where('short_url', $id)->first();
        $id = $ids->id;

        $data['office'] = Office::where('id', $id)->first();

         $data['Officeabout']=OfficeHome::with('office')
         ->where(['office_id'=>$id])
         ->where(['type_id'=>1])
         ->get();
         return view('frontend.single_page.office.all-office-about', $data);
    }

    public function allOfficePeople($id)

    {
        $ids = Office::where('short_url', $id)->first();
        $id = $ids->id;
        $data['office'] = Office::with('member')->where('id', $id)->first();
        $data['Officeabout']=OfficeToMember::with('member')->where('office_id', $id)
        ->get();
        // dd($data['Officeabout']);
         return view('frontend.single_page.office.all-office-people', $data);
    }

    public function allOfficeContact($id)
    {
        $ids = Office::where('short_url', $id)->first();

        $id = $ids->id;

        $data['office'] = Office::where('id', $id)->first();

        $data['officecontact']=Office::with('member')->get();

        return view('frontend.single_page.office.all-office-contact', $data);
    }
}
