<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SyndicateMember;
use App\Model\Member;
use App\Model\Designation;
use Image;
use DB;

class SyndicateMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data['syndicate_members'] = SyndicateMember::with(['member', 'designation'])->orderBy('type_id','ASC')->orderBy('sort_order','ASC')->get();
        return view('backend.syndicate_member.syndicate_member-list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data['editData'] = NULL;
        $data['members'] = Member::all();
        $data['designations'] = Designation::where('purpose',3)->get();

        return view('backend.syndicate_member.syndicate_member-add')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required',
    		'designation_id' => 'required',
    		'sort_order' => 'required',
        ]);

        $params = $request->all();

        $memberCheck = SyndicateMember::where('member_id',$request->member_id)->where('type_id', $request->type_id)->first();

        if($memberCheck)
        {
            return redirect()->back()->with('error','This member already exists in the list');
        }

        $member = SyndicateMember::create($params);

    	return redirect()->route('syndicate_member.list')->with('success','Syndicate Member Information add Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SyndicateMember  $syndicateMember
     * @return \Illuminate\Http\Response
     */
    public function show(SyndicateMember $syndicateMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SyndicateMember  $syndicateMember
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['members'] = Member::all();
        $data['designations'] = Designation::where('purpose',3)->get();
        $data['editData'] = SyndicateMember::find($id);
    	return view('backend.syndicate_member.syndicate_member-add')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SyndicateMember  $syndicateMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'designation_id' => 'required',
        ]);

        $memberCheck = SyndicateMember::where('member_id',$request->member_id)->where('id','!=',$id)->first();
        if($memberCheck)
        {
            return redirect()->back()->with('error','This member already exists in the list.');
        }

    	$data = SyndicateMember::findOrFail($id);
        $params = $request->except(['_token']);
        $data->update($params);

    	return redirect()->route('syndicate_member.list')->with('info','Board of Trustee Information Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SyndicateMember  $syndicateMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = SyndicateMember::findOrFail($request->id);
        @unlink(public_path('upload/board_of_trustee/'.$data->image));
    	$data->delete();
    }
}
