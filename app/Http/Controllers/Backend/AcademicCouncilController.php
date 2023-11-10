<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\AcademicCouncil;
use App\Model\Member;
use App\Model\Designation;
use Illuminate\Http\Request;

class AcademicCouncilController extends Controller
{


    public function frontend()
    {
        $data['academic_councils'] = AcademicCouncil::with('member', 'designation')->orderBy('sort_order', 'ASC')->get();

        // dd($data['syndicate_members']->toArray());
        return view('frontend.pages.academic_councils')->with($data);
    }

    public function list()
    {

        $data['academic_councils'] = AcademicCouncil::with('member', 'designation')->orderBy('sort_order', 'ASC')->get();
        //    $data['academic_councils']=AcademicCouncil::get();
        //dd($data['academic_councils']);
        return view('backend.academic_council.academic_councils_list', $data);
    }


    public function add()
    {


        $data['editData'] = NULL;
        $data['members'] = Member::all();
        $data['designations'] = Designation::where('purpose', 4)->get();

        return view('backend.academic_council.academic_councils_add', $data);
    }



    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required',
            'designation_id' => 'required',
            'image' => 'requred|mimes:jpg,jpeg,png',
        ]);



        $params = $request->all();

        $memberCheck = AcademicCouncil::where('member_id', $request->member_id)->first();

        if ($memberCheck) {
            return redirect()->back()->with('error', 'This member already exists in the list');
        }

        $member = AcademicCouncil::create($params);

        return redirect()->route('academic-councils.list')->with('success', 'Syndicate Member Information add Successfully.');
    }





    public function edit($id)
    {
        $data['members'] = Member::all();
        $data['designations'] = Designation::where('purpose', 4)->get();
        $data['editData'] = AcademicCouncil::find($id);
        return view('backend.academic_council.academic_councils_add')->with($data);
    }


    public function update(Request $request,  $id)
    {
        $request->validate([
            'designation_id' => 'required',
            'image' => 'requred|mimes:jpg,jpeg,png',
        ]);

        $memberCheck = AcademicCouncil::where('member_id', $request->member_id)->where('id', '!=', $id)->first();
        if ($memberCheck) {
            return redirect()->back()->with('error', 'This member already exists in the list.');
        }

        $data = AcademicCouncil::find($id);
        $params = $request->except(['_token']);
        $data->update($params);

        return redirect()->route('academic-councils.list')->with('info', 'Board of Trustee Information Update Successfully');
    }


    public function destroy(Request $request)
    {
        $data = AcademicCouncil::find($request->id);
        @unlink(public_path('upload/board_of_trustee/' . $data->image));
        $data->delete();
    }
}