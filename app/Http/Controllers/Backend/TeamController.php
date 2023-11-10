<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Model\TrainingWorkShopSeminar;
use App\Model\Team;
use App\Model\Member;
use Illuminate\Http\Request;

class TeamController extends Controller
{



    public function index()
    {

    	$data['traningList'] = Team::with('member')->get();
    //   dd($data['traningList']);
        return view('backend.team.list',$data);
    }


    public function add()
    {

        $data['teaMember'] =Member::get();

        //dd($data['teaMember']);
    	return view('backend.team.add', $data);
    }



    public function store(Request $request)
    {

      // dd($request->all());

        $request->validate([

            // 'traning' => 'required',
            // 'work_shop' => 'required',
            // 'seminar' => 'required',
            //  'participant' => 'required',
            // 'schedule' => 'required',
        ]);

    	$data           = new Team();
        $data->team_memebr     = $request->team_member;
        $data->post     = $request->post;
        $data->about     = 0;

        $data->save();
    	return redirect()->route('manage_team')->with('success','Data Saved successfully');
    }


    public function edit($id)
    {

    	$data['editData'] = Team::find($id);
        $data['teamMember'] =Member::get();
       // dd($data['teamEdit']);
    	return view('backend.team.edit',$data);
    }

    public function update(Request $request,$id)
    {
         //dd($request->all());

        $request->validate([

            // 'traning' => 'required',
            // 'work_shop' => 'required',
            // 'seminar' => 'required',
            // // 'participant' => 'required',
            // 'schedule' => 'required',
        ]);

    	$data           = Team::find($id);
        $data->team_memebr     = $request->team_member;
        $data->post     = $request->post;
        $data->about     = 0;

       // $data->document     = $request->document;
        $data->save();
    	return redirect()->route('manage_team')->with('success','Data Updated successfully');
    }

    public function delete(Request $request)
    {
    	$data = Team::find($request->id);
        $data->delete();
        return redirect()->route('manage_team')->with('success','Data Deleted successfully');
    }




}
