<?php

namespace App\Http\Controllers\Backend;
use App\Model\DepartmentToFacultyMember;
use App\Model\OfficeToMember;
use App\Model\Member;
use App\Model\Office;
use App\Model\Faculty;
use App\Model\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficeToMemberController extends Controller
{
    public function list()
    {
        $data['office_to_members'] = OfficeToMember::orderBy('sort_order','desc')->get();
        return view('backend.office_to_member.office_to_member-list')->with($data);
    }


    public function add()
    {
        $data['editData'] = NULL;
        $data['members'] = Member::all();
        $data['offices'] = Office::where('status',1)->orderBy('short_order', 'asc')->get();
        // $data['designations'] = Designation::where('purpose',3)->get();

        return view('backend.office_to_member.office_to_member-add')->with($data);
    }


    public function store(Request $request)
    {
        $request->validate([
            // 'faculty_id' => 'required',
    		// 'member_id' => 'required',
    		'sort_order' => 'required',
        ]);

        $officeToMember = new OfficeToMember;
        $officeToMember->office_id = $request->office_id;
        $officeToMember->member_id = $request->member_id;
        $officeToMember->status = $request->status;
        $officeToMember->sort_order = $request->sort_order;
        $officeToMember->save();
    	return redirect()->route('office_to_member.list')->with('success','Member Added Successfully.');
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
        $data['offices'] = Office::where('status',1)->orderBy('short_order', 'asc')->get();
        $data['editData'] = OfficeToMember::find($id);
        return view('backend.office_to_member.office_to_member-add')->with($data);
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            // 'faculty_id' => 'required',
    		// 'member_id' => 'required',
    		'sort_order' => 'required',

        ]);

        $officeToMember = OfficeToMember::find($id);
        $officeToMember->office_id = $request->office_id;
        $officeToMember->member_id = $request->member_id;
        $officeToMember->status = $request->status;
        $officeToMember->sort_order = $request->sort_order;
        $officeToMember->save();

    	return redirect()->route('office_to_member.list')->with('success','Member Updated Successfully.');
    }


    public function destroy(Request $request)
    {
        $data = OfficeToMember::find($request->id);
        $data->delete();
        return redirect()->route('office_to_member.list')->with('success', 'Member Deleted Successfully.');
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
