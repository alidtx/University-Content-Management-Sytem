<?php

namespace App\Http\Controllers\Backend;

use App\Model\HallMember;
use App\Model\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HallMemberController extends Controller
{
    public function viewHallMember($id)
    {
        // $data['members_list']=Member::get();
        $data['id'] = $id;
        $data['members_list'] = HallMember::with('member')->where('hall_id', $id)->get();

        return view('backend.hall_member.list', $data);
    }

    public function add(Request $request, $id)
    {
        $data['hall_id'] = $id;
        $data['members'] = Member::get();
        return view('backend.hall_member.add', $data);
    }

    public function hallmemberStore(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'member_id' => 'required',
        ]);
        //dd($request->all());
        $data               = new HallMember();
        $data->type_id   = $request->type_id;
        $data->member_id   = $request->member_id;
        $data->hall_id   = $request->hall_id;
        $data->status   = $request->status;
        $data->additional_charge    = $request->additional_charge == 'on' ? 1 : 0;
        $data->additional_designation  = $request->additional_charge == 'on' ? $request->additional_designation : '';
        $data->save();

        return redirect()->route('view_hall_member', $data->hall_id)->with('success', 'Hall Member Successfully Inserted.');
    }

    public function editMember(Request $request,  $id, $member_id)
    {
        $data['hall_id'] = $id;
        $data['members'] = Member::get();
        $data['hallEdit'] = HallMember::where('hall_id', $id)->where('id', $member_id)->first();
        // dd($data['hallEdit']);

        return view('backend.hall_member.edit', $data);
    }

    public function memberUpdate(Request $request, $id)
    {
        $data = HallMember::findOrFail($id);
        $data->type_id   = $request->type_id;
        $data->member_id   = $request->member_id;
        $data->status   = $request->status;
        $data->additional_charge    = $request->additional_charge == 'on' ? 1 : 0;
        $data->additional_designation  = $request->additional_charge == 'on' ? $request->additional_designation : '';
        $data->update();

        return redirect()->route('view_hall_member', $data->hall_id)->with('success', 'Hall Member Successfully Update.');
    }


    public function memberDelete(Request $request)
    {
        $data = HallMember::findOrFail($request->id);
        $data->delete();
    }

    public function memberWiseHall(Request $request)
    {
        // dd($request->all());
        $member = Member::where('member_type', $request->type_id)->get();

        if (isset($member)) {
            return response()->json($member);
        } else {
            return response()->json('fail');
        }
    }
}
