<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\DepartmentToFacultyMember;
use App\Model\Leave;
use App\Model\Member;
use App\Model\OfficeToMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaveController extends Controller
{
    public function index()
    {
        $data = Leave::orderBy('created_at','desc')->get();
        return view('backend.leave.list',compact('data'));
    }

    public function add()
    {
        $result['members']=Member::get();
    	return view('backend.leave.add', $result);
    }

    public function store(Request $request)
    {
        // dd( $request->all());
        $request->validate([
            'passport' => 'required',
            'purpose'=>'required',
            'start_by'=>'required',
            'end_by'=>'required',
            'country'=>'required',
        ]);
    	$data           = new Leave();
        $data->category_id              = $request->category_id;
        $data->category_type            = $request->category_type;
        $data->office_name_others       = $request->office_name_others;
        $data->member_name_others       = $request->member_name_others;
        $data->member_designation_others= $request->member_designation_others;
        $data->purpose                  = $request->purpose;
        $data->passport                 = $request->passport;
        $data->country                  = $request->country;
        $data->start_by	                = $request->start_by;
        $data->end_by                   = $request->end_by;
        $data->member_id                = $request->member_id;
        $data->status                   = $request->status;
        $data->save();
    	return redirect()->route('manage_leave')->with('success','Data Saved successfully');
    }

    public function edit($id)
    {
    	$data['editData'] = Leave::find($id);

        $data['member_id']=$id;
        $data['members']=Member::get();

    	return view('backend.leave.add',$data);
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'passport' => 'required',
            'purpose'=>'required',
            'start_by'=>'required',
            'end_by'=>'required',
            'country'=>'required',
        ]);
    	$data           = Leave::find($id);

        $data->category_id              = $request->category_id;
        $data->category_type            = $request->category_type;
        $data->office_name_others       = $request->office_name_others;
        $data->member_name_others       = $request->member_name_others;
        $data->member_designation_others= $request->member_designation_others;
        $data->purpose                  = $request->purpose;
        $data->passport                 = $request->passport;
        $data->country                  = $request->country;
        $data->start_by	                = $request->start_by;
        $data->end_by                   = $request->end_by;
        $data->member_id                = $request->member_id;
        $data->status                   = $request->status;
        $data->save();

    	return redirect()->route('manage_leave')->with('info','Data Updated Successfully');
    }

    public function delete(Request $request)
    {
    	$data = Leave::find($request->id);
        $data->delete();

        return redirect()->route('manage_leave')->with('danger','Data Deleted successfully');
    }

    public function MemberWiseDeptOffice(Request $request)
    {
        $member = Member::where('id',$request->member_id)->first();
        if($member->member_type==1){
            $deptOffice_member = DepartmentToFacultyMember::with('department')->where('member_id', $member->id)->first();
        }elseif ($member->member_type==2) {
            $deptOffice_member = OfficeToMember::with('office')->where('member_id', $member->id)->first();
        }
        if(isset($deptOffice_member))
		{
			return response()->json($deptOffice_member);
		}
		else
		{
			return response()->json('fail');
		}
    }
}
