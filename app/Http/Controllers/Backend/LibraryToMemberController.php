<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\LibraryToMember;
use App\Model\Member;
use App\Model\OurLibrary;
use Illuminate\Http\Request;

class LibraryToMemberController extends Controller
{

    public function list()
    {
        $data['library_to_members'] = LibraryToMember::get();
        return view('backend.library_to_member.library_to_member-list')->with($data);
    }


    public function add()
    {
        $data['editData'] = NULL;
        $data['members'] = Member::all();
        $data['offices'] = OurLibrary::where('status',1)->get();
        // $data['designations'] = Designation::where('purpose',3)->get();

        return view('backend.library_to_member.library_to_member-add')->with($data);
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'faculty_id' => 'required',
    		// 'member_id' => 'required',
    		// 'sort_order' => 'required',
        ]);

        $officeToMember = new LibraryToMember;
        // $officeToMember->office_id = $request->office_id;
        $officeToMember->member_id = $request->member_id;
        $officeToMember->status = $request->status;
        $officeToMember->sort_order = $request->sort_order;
        $officeToMember->save();
    	return redirect()->route('library_to_member.list')->with('success','Member Added Successfully.');
    }


    // public function show(DepartmentToFacultyMember $departmentToFacultyMember)
    // {
    //     //
    // }

    public function edit($id)
    {
        $data['members'] = Member::all();
        $data['offices'] = OurLibrary::where('status',1)->get();
        $data['editData'] = LibraryToMember::find($id);
        return view('backend.library_to_member.library_to_member-add')->with($data);
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            // 'faculty_id' => 'required',
    		// 'member_id' => 'required',
    		'sort_order' => 'required',

        ]);

        $officeToMember = LibraryToMember::find($id);
        $officeToMember->member_id = $request->member_id;
        $officeToMember->status = $request->status;
        $officeToMember->sort_order = $request->sort_order;
        $officeToMember->save();

    	return redirect()->route('library_to_member.list')->with('success','Member Updated Successfully.');
    }


    public function destroy(Request $request)
    {
        $data = LibraryToMember::find($request->id);
        $data->delete();
        return redirect()->route('library_to_member.list')->with('success', 'Member Deleted Successfully.');
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
