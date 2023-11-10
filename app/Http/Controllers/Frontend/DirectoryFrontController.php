<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Department;
use App\Model\DepartmentToFacultyMember;
use App\Model\Faculty;
use App\Model\Hall;
use App\Model\HallMember;
use App\Model\Office;
use App\Model\OfficeToMember;
use App\Model\Member;
use App\Services\MemberService;
use Illuminate\Http\Request;

class DirectoryFrontController extends Controller
{
    public function employeeDirectory()
    {
        $data['allOffice'] = Office::with('member')->get();
        $data['allfaculty'] = Faculty::with('member')->get();
        $data['allHall'] = Hall::with('member')->get();
        $data['allDepartment'] = Department::with('member')->get();
        //dd($data['allOffice']);
        return view('frontend.single_page.office.employee_directory', $data);
    }

    public function typeWiseCategoryDirectory(Request $request)
    {
        // return $request->all();
        if ($request->category_type == 1) {
            $data['categories'] = Faculty::get();
        }
        /* elseif($request->category_type==2){
            $data['categories'] = Department::get();
        } */ elseif ($request->category_type == 2) {
            $data['categories'] = Office::get();
        } elseif ($request->category_type == 3) {
            $data['categories'] = Hall::get();
        }
        // dd( $data['categories']);
        if (isset($data['categories'])) {
            return response()->json($data['categories']);
        } else {
            return response()->json('fail');
        }
    }

    public function facultyWiseDepartment(Request $request)
    {
        $dept = Department::where('faculty_id', $request->faculty_id)->get();
        if (isset($dept)) {
            return response()->json($dept);
        } else {
            return response()->json('fail');
        }
    }
    public function departmentWiseMember(Request $request)
    {
        $data['members'] = DepartmentToFacultyMember::with('member')->where('department_id', $request->department_id)->get();
        if (isset($data['members'])) {
            return response()->json($data['members']);
        } else {
            return response()->json('fail');
        }
    }

    public function CategoryWiseMember(Request $request)
    {
        $where = [];
        if ($request->radio_teacher == 2) {
            $where[] = ['member_type', '=', 1];
        } else if ($request->radio_teacher == 3) {
            $where[] = ['member_type', '=', 2];
        }
        if ($request->category_type == 1) {
            $data['members'] = DepartmentToFacultyMember::whereHas('member', function ($q) use ($where) {
                $q->where($where);
            })->with('member')->where('department_id', $request->dept_id)->get();
        } elseif ($request->category_type == 2) {
            $data['members'] = OfficeToMember::whereHas('member', function ($q) use ($where) {
                $q->where($where);
            })->with('member')->where('office_id', $request->category_id)->get();
        } elseif ($request->category_type == 3) {
            $data['members'] = HallMember::whereHas('member', function ($q) use ($where) {
                $q->where($where);
            })->with('member')->where('hall_id', $request->category_id)->get();
        }
        // dd($data['members']->pluck());



        // if ($request->category_type == 2) {
        //     $data1 = MemberService::officeMemberList($request->category_id);
        //     return response()->json($data1);
        // } elseif ($request->category_type == 1) {
        //     $data1 = MemberService::DeptMemberList($request->dept_id);
        //     return response()->json($data1);
        // } elseif ($request->category_type == 3) {

        //     $data1 = MemberService::HallMemberList($request->category_id);
        //     return response()->json($data1);
        // } else {
        //     $d['error'] = 'Something wrong';
        //     return response()->json($d);
        // }
        // dd($data1);
        // if (isset($data1)) {
        //     return response()->json($data1);
        // } else {
        //     return response()->json('fail');
        // }


        if (isset($data['members'])) {
            return response()->json($data['members']);
        } else {
            return response()->json('fail');
        }
    }


    public function allteacher(Request $request)

    {
        if ($request->all_teacher == 1) {

            $data['teacher'] = Member::where('member_type', $request->all_teacher)->get();
            // $data['teacher'] = DepartmentToFacultyMember::with('member')->where('member_type', $request->all_teacher)->get();
        }

        if ($request->all_teacher == 2) {

            $data['teacher'] = Member::where('member_type', $request->all_teacher)->get();
        }

        if ($request->all_teacher == 3) {

            $data['teacher'] = Member::where('member_type', $request->all_teacher)->get();
        }
        return response()->json($data['teacher']);
    }
}
