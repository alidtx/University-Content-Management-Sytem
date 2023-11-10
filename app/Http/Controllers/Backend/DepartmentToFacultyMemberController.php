<?php

namespace App\Http\Controllers\Backend;

use App\Model\DepartmentToFacultyMember;
use App\Http\Controllers\Controller;
use App\Model\Member;
use App\Model\Faculty;
use App\Model\Department;

use Illuminate\Http\Request;

class DepartmentToFacultyMemberController extends Controller
{

    public function list()
    {
        $data['dept_to_members'] = DepartmentToFacultyMember::orderBy('sort_order','asc')->get();
        return view('backend.department_to_faculty_member.department_to_faculty_member-list')->with($data);
    }


    public function add()
    {
        $data['editData'] = NULL;
        $data['members'] = Member::all();
        $data['departments'] = Department::get();
        $data['faculties'] = Faculty::get();
        // $data['designations'] = Designation::where('purpose',3)->get();
        return view('backend.department_to_faculty_member.department_to_faculty_member-add')->with($data);
    }


    public function store(Request $request)
    {

        $request->validate([
            'faculty_id' => 'required',
            'sort_order' => 'required',
    		'member_id' => 'required',
        ]);

        // dd($request->all());
        $departmentToMember = new DepartmentToFacultyMember;
        $departmentToMember->faculty_id = $request->faculty_id;
        $departmentToMember->department_id = $request->department_id;
        $departmentToMember->member_id = $request->member_id;
        $departmentToMember->status = $request->status;
        $departmentToMember->is_faculty = $request->is_faculty;
        $departmentToMember->sort_order = $request->sort_order;

        $departmentToMember->save();

    	return redirect()->route('department_to_members.list')->with('success','Member Added Successfully.');
    }


    public function show(DepartmentToFacultyMember $departmentToFacultyMember)
    {
        //
    }


    public function edit($id)
    {
        $data['members'] = Member::all();
        $data['departments'] = Department::get();
        $data['faculties'] = Faculty::get();
        $data['editData'] = DepartmentToFacultyMember::find($id);
        return view('backend.department_to_faculty_member.department_to_faculty_member-add')->with($data);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'faculty_id' => 'required',
    		'member_id' => 'required',
        ]);

        $departmentToMember = DepartmentToFacultyMember::find($id);
        $departmentToMember->faculty_id = $request->faculty_id;
        $departmentToMember->department_id = $request->department_id;
        $departmentToMember->member_id = $request->member_id;
        $departmentToMember->status = $request->status;
        $departmentToMember->is_faculty = $request->is_faculty;
        $departmentToMember->sort_order = $request->sort_order;

        $departmentToMember->save();

    	return redirect()->route('department_to_members.list')->with('success','Member Updated Successfully.');
    }


    public function destroy(Request $request)
    {
        $data = DepartmentToFacultyMember::find($request->id);
        $data->delete();
        return redirect()->route('department_to_members.list')->with('success', 'Member Deleted Successfully.');
    }


    public function MemberWiseDesignation(Request $request)
    {

        $member = Member::where('id',$request->member_id)->first();

        if(isset($member))
		{
			return response()->json($member->member_designation);
		}
		else
		{
			return response()->json('fail');
		}
    }


}
